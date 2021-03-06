<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Panneau d'administration</title>

	<link href="{{ asset('css/back/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/back/bootstrap/bootstrap-theme.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/back/bootstrap/my-bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/back/bootstrap/checkbox.bootstrap.css') }}" rel="stylesheet">


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Ma Douce Parenthèse</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('admin.home') }}">Accueil</a></li>
					<li><a href="{{ route('admin.pages.index') }}">Mes Pages</a></li>
					<li><a href="{{ route('admin.articles.index') }}">Mes Articles</a></li>
					<li><a href="{{ route('admin.mise-en-avant.index') }}">Mise en Avant</a></li>
					<li><a href="{{ route('admin.galerie.index') }}">Ma Galerie</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/') }}" target="_blank">Voir le site</a></li>
						<li><a href="{{ url('/admin/auth/login') }}">Login</a></li>
						<!--<li><a href="{{ url('/auth/register') }}">Register</a></li>-->
					@else
						<li><a href="{{ url('/accueil') }}" target="_blank">Voir le site</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('admin/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap/jquery.confirm.js') }}"></script>
	<script src="{{ asset('js/bootstrap/app.js') }}"></script>
	<script src="{{ asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('js/fancybox/fancybox.js') }}"></script>
	<script src="{{ asset('js/fancybox/jquery.fancybox-1.3.4.pack.js') }}"></script>
	<script>
        CKEDITOR.replace('ckeditor');
    </script>
    
    
</body>
</html>
