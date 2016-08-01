<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio</title>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap/css/bootstrap.css') }}">
	<script src="{{ asset('/js/jquery/jquery-3.1.0.min.js') }}" type="text/javascript" charset="utf-8" async defer></script>
	<script src="{{ asset('/css/bootstrap/js/bootstrap.js') }}" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<div class='container'>
		@include('admin.templates.partials.nav')
		
		<hr></hr>
		<section>
			<div class="panel panel-default">
			  	<div class="panel-heading"><h1>Esto es Laravel</h1></div>
			  	<div class="panel-body">
			    	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			  	</div>
			</div>		
		</section>
	</div>
	<footer class="footer">
      <div class="container">
        <p class="text-muted">Todos los derechos reservados 2016</p>
      </div>
    </footer>
</body>
</html>