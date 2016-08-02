@extends('admin.templates.main')
@section('title','Crear Usuario')
@section('content')
	
	{!! Form::open(['route'=>'admin.users.store', 'method'=>'POST']) !!}

		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('name','Nombre:') !!}
			{!! Form::text('name', null, ['class'=>'form-control','required','placeholder'=>'Nombre Completo']) !!}   <!--parametros: nombre, valor default, parametos -->
		</div>
		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('email','Email:') !!}
			{!! Form::text('email', null, ['class'=>'form-control','required','placeholder'=>'Correo electronico']) !!}   
		</div>
		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('clave','Clave:') !!}
			{!! Form::password('clave', ['class'=>'form-control','required','placeholder'=>'Clave']) !!}   

		</div>
		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('tipo','Tipo Usuario:') !!}
			{!! Form::select('tipo', [''=>'Seleccione','member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control','required']) !!}   
		</div>
		<div class='form-group col-md-12 col-sm-12 col-xs-12'>			
			{!! Form::submit('registrar', ['class'=>'btn btn-primary','name'=>'btn_registrar', 'id'=>'btn_regitrar']) !!}   

		</div>

	{!! Form::close() !!}
@endsection