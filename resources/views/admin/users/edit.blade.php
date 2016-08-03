@extends('admin.templates.main')
@section('title','Editar usuario - ' . $user->name)
@section('content')
	
	{!! Form::open(['route'=> ['admin.users.update', $user->id], 'method'=>'PUT']) !!}

		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('name','Nombre:') !!}
			{!! Form::text('name', $user->name, ['class'=>'form-control','required','placeholder'=>'Nombre Completo']) !!}   <!--parametros: nombre, valor default, parametos -->
		</div>
		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('email','Email:') !!}
			{!! Form::text('email', $user->email, ['class'=>'form-control','required','placeholder'=>'Correo electronico']) !!}   
		</div>		
		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('tipo','Tipo Usuario:') !!}
			{!! Form::select('tipo', [''=>'Seleccione','member'=>'Miembro','admin'=>'Administrador'],$user->type,['class'=>'form-control','required']) !!}   
		</div>
		<div class='form-group col-md-12 col-sm-12 col-xs-12'>			
			{!! Form::submit('Actualizar', ['class'=>'btn btn-primary','name'=>'btn_actualizar', 'id'=>'btn_actualizar']) !!}   
		</div>

	{!! Form::close() !!}
@endsection