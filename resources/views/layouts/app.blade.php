<!DOCTYPE html>
<html lang="en">
<head>
	<title>App - Biblioteca</title>
	<meta charset="utf-8">
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- Fontawesome CDN -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- Peresonal CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<!-- App Favico -->
	<link rel="shortcut icon" href="{{asset('/images/app-favico.ico')}}" />
	<!-- Jquery CDN -->
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body class="">
	<div class="mb-5"><!-- Inicio Div Navbar -->
		<!--Navbar -->
		<nav class="bg-dark mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1v fixed-top">
		  <a class="navbar-brand" href="#">@LibApp</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
		    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
		    <ul class="navbar-nav mr-auto">
		      <!--<li class="nav-item active">
		        <a class="nav-link" href="#">Inicio
		          <span class="sr-only">(current)</span>
		        </a>
		      </li>-->
		      <li class="nav-item click-user">
		        <a class="nav-link" href="{{route('admin.users.index')}}">Usuários</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{route('admin.books.index')}}">Livros</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Livros alugados</a>
		      </li>
		    </ul>
		    <ul class="navbar-nav ml-auto nav-flex-icons">
		      <li class="nav-item avatar">
		        <a class="nav-link p-0" href="#">
		          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
		            alt="avatar image" height="35">
		        </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Sair</a>
		      </li>
		    </ul>
		  </div>
		</nav>
		<!--/.Navbar -->
	</div><!-- Fim Div Navbar -->
	<div class="container">

		@include('flash::message')
		@yield('content')

	</div>
	
	<!-- Close Flash Message -->
	<script>
		$('div.alert').not('.alert-important').delay(3000).fadeOut(350).css('margin-top', 50);
		$('div.alert').addClass('mt-3 mb-3');
	</script>
	<!-- Bootstrap 4 Javascript -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>