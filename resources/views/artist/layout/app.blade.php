<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Photoshow</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('artist.inc.topbar')
	<div class="container">
		@include('artist.inc.flashMessage')
		@yield('content')
	</div>

<script src="/js/app.js"></script>
<script>$('.carousel').carousel()</script>
</body>
</html>