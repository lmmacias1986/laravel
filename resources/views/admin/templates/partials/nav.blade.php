@if(Auth::user())
	<ul class="nav nav-tabs">
	  <li role="presentation"><a href="/admin">Inicio</a></li>
	  <li role="presentation"><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
	  <li role="presentation"><a href="{{ route('admin.categories.index') }}">Categorias</a></li>
	  <li role="presentation"><a href="#">Articulos</a></li>
	  <li role="presentation"><a href="#">Imagenes</a></li>
	  <li role="presentation"><a href="#">Tags</a></li>
	</ul>
@endif