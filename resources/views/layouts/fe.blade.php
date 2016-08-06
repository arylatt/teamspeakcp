<html>
	<head>
		<title>
			@if(isset($title))
				{{ $title }} - {{ config('app.sitename') }}
			@else
				{{ config('app.sitename') }}
			@endif
		</title>
		<link rel="stylesheet" type="text/css" href="/css/all.css" />
	</head>

	<body class="pageWithTopNav">
		@include('components.fe.navbar')

		<div class="ui centered page grid">
			<div class="row">
				<div class="fourteen wide column">
					<div class="ui basic page-content segment">
						@yield('body')
					</div>
				</div>
			</div>
			<div class="row">
				<div class="center aligned column">
					<div class="ui inverted divider"></div>
					<h5 class="ui inverted page-footer header"><small>Licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License 2.0</a> &bull; <a href="https://github.com/AndyR207/teamspeakcp" target="_blank">Andrew Rylatt</a> {{ date("Y") }}</small></h5>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="/js/all.js"></script>
</html>