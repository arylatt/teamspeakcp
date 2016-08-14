@extends('layouts.fe')

@section('body')
	<h1 class="ui inverted dividing header">
		Log In
	</h1>
	<div class="inverted">
		<div id="loginError" class="ui icon error message" style="display: none;">
			<i class="warning sign icon"></i>
			<div class="content">
				<div class="header">Uh Oh!</div>
				<p>That username and password combination isn't right... Please try again or click 'Forgot Details'<span></span></p>
			</div>
		</div>
		<div class="ui form segment">
			<div class="field">
				<label for="user">Username</label>
				<div class="ui left icon input">
					<input type="text" id="user" placeholder="Username" required autofocus />
					<i class="user icon"></i>
				</div>
			</div>
			<div class="field">
				<label for="pass">Password</label>
				<div class="ui left icon input">
					<input type="password" id="pass" placeholder="Password" required />
					<i class="lock icon"></i>
				</div>
			</div>
			<div class="right aligned field">
				<input type="hidden" id="_token" value="{{ csrf_token() }}" />
				<button id="forgotPassBtn" class="ui orange icon button">
					Forgot Details
					<i class="question icon"></i>
				</button>
				<button id="loginBtn" class="ui green icon button">
					Log In
					<i class="sign in icon"></i>
				</button>
			</div>
		</div>
		<br />
		<small><a href="/signup/">New user? Sign up here...</a></small>
	</div>
@endsection
