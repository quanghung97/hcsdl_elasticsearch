<!DOCTYPE HTML>

<html>
	<head>
		<title>ELASTICSEARCH-EXAMPLE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{URL::asset('public/assets/css/main.css')}}" />
		@yield('css')
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="{{route('home')}}" class="logo">Home</a>
					<nav id="nav">
						<a href="{{route('search_result_chuyen_gia')}}">Chuyên Gia</a>
						<a href="{{route('elements')}}">Elements</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		@yield('banner')
@yield('main')
@yield('footer')


		<!-- Scripts -->
			<script src="{{URL::asset('public/assets/js/jquery.min.js')}}"></script>
			<script src="{{URL::asset('public/assets/js/skel.min.js')}}"></script>
			<script src="{{URL::asset('public/assets/js/util.js')}}"></script>
			<script src="{{URL::asset('public/assets/js/main.js')}}"></script>
			@yield('js')

	</body>
</html>
