@extends('layouts.fe')

@section('body')
	<h1 class="ui inverted dividing header">
		Log In
	</h1>
	<div class="inverted">
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
				<button id="login" class="ui orange icon button">
					Forgot Details
					<i class="question icon"></i>
				</button>
				<button id="login" class="ui green icon button">
					Log In
					<i class="sign in icon"></i>
				</button>
			</div>
		</div>
		<br />
		<small><a href="/signup/">New user? Sign up here...</a></small>
	</div>
@endsection