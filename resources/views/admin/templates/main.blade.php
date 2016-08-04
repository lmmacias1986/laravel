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

	<!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body class="cuerpo">	
	<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
			<div class="navbar-header">
		        <!-- Collapsed Hamburger -->
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
		            <span class="sr-only">Toggle Navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>

		        <!-- Branding Image -->
		        <a class="navbar-brand" href="{{ url('/') }}">
		            Laravel
		        </a>
		    </div>        
			<div class="collapse navbar-collapse" id="app-navbar-collapse">		
		        <!-- Right Side Of Navbar -->
		        <ul class="nav navbar-nav navbar-right">
		            <!-- Authentication Links -->
		            @if (Auth::guest())
		                <li><a href="{{ route('admin.auth.login') }}">Login</a></li>
		            @else
		                <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		                        {{ Auth::user()->name }} <span class="caret"></span>
		                    </a>

		                    <ul class="dropdown-menu" role="menu">		                        
		                        @if( Auth::user()->type == 'admin')
		                        <li><a href="{{ url('/admin') }}">Administrar</a></li>
		                        @endif
		                        <li><a href="{{ url('/logout') }}">Salir <i class="fa fa-btn fa-sign-out"></i></a></li>
		                    </ul>		                        		                    
		                </li>
		            @endif
		        </ul>
		    </div>
		</div>
    </nav>
	<div class='container'>
		@include('admin.templates.partials.nav')		
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
