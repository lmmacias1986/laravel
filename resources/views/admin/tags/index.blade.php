
@extends('admin.templates.main')
@section('title','Tags Creados')
@section('content')
	<div class="container-fluid">		
		<a href="{{ route('admin.tags.create') }}" class="btn btn-info pull-right">Registrar nuevo tag</a>
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