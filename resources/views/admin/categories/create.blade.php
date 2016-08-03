@extends('admin.templates.main')
@section('title','Agregar Categoria')
@section('content')
	
	{!! Form::open(['route'=>'admin.categories.store', 'method'=>'POST']) !!}
		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('name','Nombre:') !!}
			{!! Form::text('name', null, ['class'=>'form-control','required','placeholder'=>'Nombre de la categoria']) !!}
		</div>		
		<div class='form-group col-md-12 col-sm-12 col-xs-12'>			
			{!! Form::submit('Agregar', ['class'=>'btn btn-primary','name'=>'btn_agregar', 'id'=>'btn_agregar']) !!} 
		</div>

	{!! Form::close() !!}
@endsection