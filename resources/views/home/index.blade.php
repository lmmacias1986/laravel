@extends('layouts.app')
@section('content')
<div class="container">
    <!--buscador-->    
    <div class="col-md-12">
        <div class="input-group">
            <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            <!--buscador de tags con scope-->
            {!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'pull-left']) !!}
                <div class="form-group ">
                    {!! Form::Text('name',null,['class'=>'form-control', 'placeholder' => 'Buscar Articulo...', 'aria-describedby' => 'search']) !!}
                </div>
            {!! Form::close() !!}
            <!--fin buscador -->                            
        </div>              
    </div>                    

    <div class="col-md-12">
        <div class="panel panel-default">                    
            <div class="panel-heading">Articulos de interes</div>
            <div class="panel-body">                    
                <div class="col-md-12" >
                    @foreach($articles as $article)
                        <div class="col-md-4 col-sm-3 hidden-xs">
                            <img class="img-responsive" src="{{asset('images/articles')}}/{{ $article->image }}" title="Su fotografía">
                        </div>
                        <div class="col-md-8 col-sm-9 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><a hre="">{{ $article->title }}</a></div>
                                <div class="panel-body">
                                    {{ $article->content }}
                                    <hr>
                                    <a hre="" class="pull-right ">ver mas...</a>
                                </div>                                
                            </div>
                        </div>                                                            
                    @endforeach            
                    {!! $articles->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection