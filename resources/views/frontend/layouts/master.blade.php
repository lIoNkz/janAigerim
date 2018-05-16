<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">

	<title>JANA AIGERIM</title>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<!-- MAIN STYLES -->
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/grid.css">
	<!-- SLICK SLIDER STYLES -->
	<link rel="stylesheet" href="/css/slick.min.css">
	<!-- SEPARATE PAGESS' STYLES -->
	<link rel="stylesheet" href="/css/pages/indexPage.css">

</head>
<body>

	<header>
		@include('frontend.partials._header')
	</header>
	<main>
		@yield('content')
	</main>
	<footer class="mp-footer">
		@include('frontend.partials._footer')
	</footer>

	<script  src="/js/jquery-3.3.1.min.js"></script>
	<script  src="/js/slick.min.js"></script>
	<script  src="/js/app.js"></script>
</body>
</html>