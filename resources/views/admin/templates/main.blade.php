<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title','Default') | Administración</title>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap/css/bootstrap.css') }}">
	<script src="{{ asset('/js/jquery/jquery-3.1.0.min.js') }}" type="text/javascript" charset="utf-8" async defer></script>
	<script src="{{ asset('/css/bootstrap/js/bootstrap.js') }}" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	@include('admin.templates.partials.nav')
	
	<section>
		@yield('content')
	</section>
</body>
</html>