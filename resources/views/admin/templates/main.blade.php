<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title','Default') | Administración</title>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
	<script src="{{ asset('/js/jquery/jquery-3.1.0.min.js') }}" type="text/javascript" charset="utf-8" async defer></script>
	<script src="{{ asset('/css/bootstrap/js/bootstrap.js') }}" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body class="cuerpo">	
	<div class='container'>
		@include('admin.templates.partials.nav')		
		<hr>
		<section>
			<div class="panel panel-default">
			  	<div class="panel-heading">@yield('title')</div>
			  	<div class="panel-body">
			  		@include('admin.templates.partials.msg_errors')
			  		@include('flash::message')
				    @yield('content')				    
				</div>
			</div>						
		</section>
	</div>
</body>
</html>