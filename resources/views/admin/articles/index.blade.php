
@extends('admin.templates.main')
@section('title','Articulos Creados')
@section('content')
	<div class="container-fluid">		
		<div class="input-group">
		  	<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
		  	<!--buscador de tags con scope-->
			{!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'pull-left']) !!}
				<div class="form-group ">
					{!! Form::Text('name',null,['class'=>'form-control', 'placeholder' => 'Buscar Articulo...', 'aria-describedby' => 'search']) !!}
				</div>
			{!! Form::close() !!}
			<!--fin buscador -->
			<a href="{{ route('admin.articles.create') }}" class="btn btn-info pull-right">Registrar nuevo articulo</a>
		</div>				
	</div>
	<hr>	
	<table class="table table-striped">
		<trhead>
			<th>ID</th>
			<th>titulo</th>			
			<th>Categoria</th>
			<th>Usuario</th>
			<th>Fecha Creación</th>
			<th>Acción</th>
		</trhead>
		<tbody>
			@foreach($articles as $article)
				<tr>
					<td>{{ $article->id }}</td>
					<td>{{ $article->title }}</td>
					<td>{{ $article->category->name }}</td>
					<td>{{ $article->user->name }}</td>
					<td>{{ $article->created_at }}</td>
					<td>						
						<a href="{{ route('admin.articles.destroy',$article->id) }}" onclick="return confirm('Esta seguro de eliminar este article?')">
							<span class="glyphicon glyphicon-trash "></span>
						</a>
						 |  
						<a href="{{ route('admin.articles.edit',$article->id) }}">
							<span class="glyphicon glyphicon-pencil "></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $articles->render() !!}
@endsection
