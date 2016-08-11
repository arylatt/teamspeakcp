$(document).ready(function() {
	$('#loginBtn').on('click', Login);
});

function Login() {
	$.ajax({
		url: '/login',
		type: 'POST',
		data: {
			user: $('#user').val(),
			pass: $('#pass').val(),
			_token: $('#_token').val(),
		},
		success: function(resp, stat, xhr) {
			console.log(resp);
		},
	});
}