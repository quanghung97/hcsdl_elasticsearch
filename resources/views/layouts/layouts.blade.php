<!DOCTYPE HTML>

<html>
	<head>
		<title>Theory by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{URL::asset('public/assets/css/main.css')}}" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Theory</a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="{{route('generic')}}">Generic</a>
						<a href="{{route('elements')}}">Elements</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h1>Welcome to Theory</h1>
				<p>A free responsive HTML5 website template by TEMPLATED.</p>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="{{URL::asset('public/assets/js/jquery.min.js')}}"></script>
			<script src="{{URL::asset('public/assets/js/skel.min.js')}}"></script>
			<script src="{{URL::asset('public/assets/js/util.js')}}"></script>
			<script src="{{URL::asset('public/assets/js/main.js')}}"></script>

	</body>
</html>
