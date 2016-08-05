
@extends('admin.templates.main')
@section('title','Galeria Imagenes')
@section('content')	
	@foreach($images as $image)
		<div class="col-md-4">
			<div class="panel panel-default">			  	
		  		<div class="panel-body">
		  			<img src="/images/articles/{{ $image->name }}" class="img-responsive">
		  		</div>
		  		<div class="panel-footer">{{ $image->article->title }}</div>
			</div>
		</div>
	@endforeach	
	<div class="col-md-12 col-sm-12 col-xs-12">
		{!! $images->render() !!}	 
	</div>
@endsection