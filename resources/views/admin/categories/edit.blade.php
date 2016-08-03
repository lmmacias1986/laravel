@extends('admin.templates.main')
@section('title','Editar Categoria '. $categoria->name)
@section('content')
	
	{!! Form::open(['route'=>['admin.categories.update', $categoria->id], 'method'=>'PUT']) !!}
		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('name','Nombre:') !!}
			{!! Form::text('name', $categoria->name, ['class'=>'form-control','required','placeholder'=>'Nombre de la categoria']) !!}
		</div>		
		<div class='form-group col-md-12 col-sm-12 col-xs-12'>			
			{!! Form::submit('Actualizar', ['class'=>'btn btn-primary','name'=>'btn_actualizar', 'id'=>'btn_actualizar']) !!} 
		</div>

	{!! Form::close() !!}
@endsection