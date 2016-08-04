
@extends('admin.templates.main')
@section('title','Tags Creados')
@section('content')
	<div class="container-fluid">		
		<div class="input-group">
		  	<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
		  	<!--buscador de tags con scope-->
			{!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'pull-left']) !!}
				<div class="form-group ">
					{!! Form::Text('name',null,['class'=>'form-control', 'placeholder' => 'Buscar Tag...', 'aria-describedby' => 'search']) !!}
				</div>
			{!! Form::close() !!}
			<!--fin buscador -->
			<a href="{{ route('admin.tags.create') }}" class="btn btn-info pull-right">Registrar nuevo tag</a>
		</div>				
	</div>
	<hr>	
	<table class="table table-striped">
		<trhead>
			<th>ID</th>
			<th>Tag</th>			
			<th>Acción</th>
		</trhead>
		<tbody>
			@foreach($tags as $tag)
				<tr>
					<td>{{ $tag->id }}</td>
					<td>{{ $tag->name }}</td>
					<td>						
						<a href="{{ route('admin.tags.destroy',$tag->id) }}" onclick="return confirm('Esta seguro de eliminar este tag?')">
							<span class="glyphicon glyphicon-trash "></span>
						</a>
						 |  
						<a href="{{ route('admin.tags.edit',$tag->id) }}">
							<span class="glyphicon glyphicon-pencil "></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $tags->render() !!}
@endsection