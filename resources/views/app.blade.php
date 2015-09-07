<!doctype html>
<html>

	<head>

		<title>The Spartan Martin | @yield('title')</title>
@include('partials/head')
@yield('stylesheets')
@yield('inline')
@yield('headscripts')

	</head>

	<body>

		<header>
			<section class="jumbotron jumbotron-header jumbotron-@yield('jumbotron')">
				<h1 class="spartan-text spartan-text-shadow">@yield('title')</h1>
			</section>

@include('partials/nav-main')
		</header>

@yield('content')
@include('partials/footer')
@yield('footerscripts')

	</body>

</html>