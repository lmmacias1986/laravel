
@extends('admin.templates.main')
@section('title','Usuarios Creados')
@section('content')
	<div class="container-fluid">		
		<a href="{{ route('admin.users.create') }}" class="btn btn-info pull-right">Registrar nuevo usuario </a>
	</div>
	<hr>
	<table class="table table-striped">
		<trhead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Acción</th>
		</trhead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if($user->type=="admin")
							<span class="label label-primary">{{ $user->type }}</span>							
						@else
							<span class="label label-success">{{ $user->type }}</span>
						@endif						
						</td>
					<td>						
						<a href="">
							<span class="glyphicon glyphicon-trash "></span>
						</a>
						 |  
						<a href="">
							<span class="glyphicon glyphicon-pencil "></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
@endsection