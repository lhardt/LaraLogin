<!doctype html>
<html>
	<head>
	    <!-- Scripts -->
	    <script src="{{ asset('js/app.js') }}" defer></script>
	    <!-- Styles -->
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<!-- Lost so much time trying to import bootstrap directly / reinstalling npm -->
	</head>
	<body class="bg-light">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">Laravel Login Test</a>
				<div class="collapse navbar-collapse" id="navbarsExampleDefault">
					<div style="flex-grow:1" ></div>
					<ul class="navbar-nav me-auto mb-2 mb-md-0">
						<li class="nav-item">
							<a class="nav-link" href="/">Home</a>
						</li>
						@unless (Auth::check())
							<li class="nav-item">
								<a class="nav-link" href="login">Login</a>
							</li>
						@endunless
					</ul>
				</div>
			</div>
		</nav>
		<div style="padding-top:5rem;">;</div>
			@yield('content')

	</body>
</html>
