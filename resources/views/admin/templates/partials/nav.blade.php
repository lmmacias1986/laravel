@if(Auth::user())
	<ul class="nav nav-tabs">
	  <li role="presentation"><a href="/admin">Inicio</a></li>
	  <li role="presentation"><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
	  <li role="presentation"><a href="{{ route('admin.categories.index') }}">Categorias</a></li>
	  <li role="presentation"><a href="{{ route('admin.articles.index') }}">Articulos</a></li>
	  <li role="presentation"><a href="{{ route('admin.tags.index') }}">Tags</a></li>
	  <li role="presentation"><a href="{{ route('admin.images.index') }}">Imagenes</a></li>
	</ul>
@endif