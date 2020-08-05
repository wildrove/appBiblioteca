<!DOCTYPE html>
<html lang="en">
<head>
	<title>App - Biblioteca</title>
	<meta charset="utf-8">
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- Javascript CDN -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
	<!-- Peresonal CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<!-- Jquery CDN -->
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	@yield('content')
</body>
</html>