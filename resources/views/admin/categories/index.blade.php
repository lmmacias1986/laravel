
@extends('admin.templates.main')
@section('title','Categorias Creados')
@section('content')
	<div class="container-fluid">		
		<a href="{{ route('admin.categories.create') }}" class="btn btn-info pull-right">Registrar nueva categoria</a>
	</div>
	<hr>
	<table class="table table-striped">
		<trhead>
			<th>ID</th>
			<th>Categoria</th>			
			<th>Acción</th>
		</trhead>
		<tbody>
			@foreach($categorias as $categoria)
				<tr>
					<td>{{ $categoria->id }}</td>
					<td>{{ $categoria->name }}</td>
					<td>						
						<a href="{{ route('admin.categories.destroy',$categoria->id) }}" onclick="return confirm('Esta seguro de eliminar esta categoria?')">
							<span class="glyphicon glyphicon-trash "></span>
						</a>
						 |  
						<a href="{{ route('admin.categories.edit',$categoria->id) }}">
							<span class="glyphicon glyphicon-pencil "></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $categorias->render() !!}
@endsection