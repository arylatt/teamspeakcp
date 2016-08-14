$(document).ready(function() {
	$('#loginBtn').on('click', Login);
});

function Login() {
	$('#loginError').fadeOut();
	$.ajax({
		url: '/login',
		type: 'POST',
		data: {
			user: $('#user').val(),
			pass: $('#pass').val(),
			_token: $('#_token').val(),
		},
		success: function(resp, stat, xhr) {
			if(resp.authed) {
				window.location.href = "/dash";
			} else {
				$('#loginError span').html('');
				if(typeof resp.attempts != 'undefined') {
					$('#loginError span').html('<br />(' + resp.attempts + ' attempts remaining)');
					if(resp.attempts == 0) {
						$('#loginError span').html('<br />Your account has been locked out. Please use \'Forgot Details\' to recover it.');
					}
				}
				$('#loginError').fadeIn();
			}
		},
	});
}