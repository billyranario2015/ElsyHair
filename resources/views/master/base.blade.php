<html>
	<head>
		<title>ElsyHair</title>
		
		<link href='http://fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('css/elsystyle.css') }}">

		@yield('styles')

	</head>
	<body>
		<div class="container">
			@include('sections.header')

			@yield('containers')

			@include('sections.footer')
			@include('sections.copy')
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="{{ asset('js/wow.js') }}"></script>
		<script src="{{ asset('js/elsyjs.js') }}"></script>

		@yield('script')
	</body>
</html>
