@extends('admin.templates.main')
@section('title','Agregar Artículo')
@section('content')
	
	{!! Form::open(['route'=>'admin.articles.store', 'method'=>'POST', 'files' => true]) !!}
		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('title','Título:') !!}
			{!! Form::text('title', null, ['class'=>'form-control','required','placeholder'=>'Título del artículo']) !!}
		</div>		
		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('category_id','Categoria:') !!}
			{!! Form::select('category_id', $categories, null,['class'=>'form-control select-category','placeholder'=>'Categoria','required']) !!}
		</div>		
		<div class='form-group col-md-12 col-sm-12 col-xs-12'>
			{!! Form::label('content','Contenido:') !!}
			{!! Form::textarea('content', null, ['class'=>'form-control textarea-content','required','placeholder'=>'Contenido del artículo']) !!}
		</div>		
		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('tags','Tags:') !!}
			{!! Form::select('tags[]', $tags, null,['class'=>'form-control select-tag','multiple','required']) !!}
		</div>
		<div class='form-group col-md-4 col-sm-6 col-xs-12'>
			{!! Form::label('image','Imagen:') !!}
			{!! Form::file('image') !!}
		</div>
		<div class='form-group col-md-12 col-sm-12 col-xs-12'>
			{!! Form::submit('Agregar Artículo', ['class'=>'btn btn-primary','name'=>'btn_agregar', 'id'=>'btn_agregar']) !!} 
		</div>

	{!! Form::close() !!}
@endsection
@section('js')
	<script>
		$('.select-tag').chosen({
			placeholder_text_multiple: 'Seleccione máximo 3 tags.',
			max_selected_options: 3,
			no_results_text: "Oops, no se encuentra el tag!"		
		});
		$('.select-category').chosen({
			placeholder_text_single: 'Seleccione una categoria.',
			no_results_text: "Oops, no se encuentra la categoria!"		
		});
		$('.textarea-content').trumbowyg([
			
		]);
	</script>
@endsection