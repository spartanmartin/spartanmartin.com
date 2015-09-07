@extends('app')

@section('header')
<!doctype html>
<html>

	<head>

		<title>The Spartan Martin | @yield('title')</title>
		<link rel="stylesheet" id="bootstrap-styles" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" type="text/css">
		<link rel='stylesheet' id="fonts-heading" href='http://fonts.googleapis.com/css?family=Montserrat:400,700' type='text/css'>
		<link rel='stylesheet' id="fonts-body" href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' type='text/css'>
		<link rel="stylesheet" id="styles-main" href="/css/style.css" type="text/css">

	</head>

	<body>

		<header>
			<nav class="nav nav-tabs nav-main spartan-box">
				<div class="container">
					<ul>
						<li><a href="/" title="The Spartan Martin Home">Home</a></li>
						<li><a href="/resume" title="My Resume">Resume</a></li>
						<li><a href="/treehouse" title="Treehouse Profile Badges">Treehouse</a></li>
						<li><a href="/portfolio" title="Portfolio">Portfolio</a></li>
						<li><a href="/contact" title="Contact Me">Contact</a></li>
					</ul>
				</div>
			</nav>

			<section class="jumbotron jumbotron-header jumbotron-@yield('jumbotron')">
				<h1 class="spartan-text">@yield('title')</h1>
			</section>
		</header>

@stop
