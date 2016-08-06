<div class="ui top fixed menu">
	<div class="header item">
		TeamSpeakCP
	</div>
	<a id="nav_home" class="item" href="/">
		<i class="home icon"></i>
		Home
	</a>
	<a id="nav_channels" class="item" href="/channels/">
		<i class="server icon"></i>
		Channels
	</a>
	<a id="nav_icons" class="item" href="/icons/">
		<i class="tasks icon"></i>
		Icons
	</a>
	<a id="nav_report" class="item" href="/report/">
		<i class="flag icon"></i>
		Report Abuse
	</a>
	<div class="right menu">
		<div class="item">
			<div class="ui red label" style="margin-left: 0px;">
				TeamSpeak is currently down
			</div>
		</div>
		@if(!Auth::check())
			<a id="nav_auth" class="item" href="/login/">
				Log In / Sign Up
			</a>
		@else
			<div class="ui dropdown item">
				{{ Auth::user()->user_name }}
				<i class="dropdown icon"></i>
				<div class="menu">
					<a class="item">
						Account
					</a>
					@if(Auth::user()->IsAdmin())
						<a class="item" href="/admin/">
							Admin Panel
						</a>
					@endif
					<a class="item" onclick="auth_Logout()">
						Sign Out
					</a>
				</div>
			</div>
		@endif
	</div>
</div>