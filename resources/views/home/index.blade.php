<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title','Default') | Administración</title>
    <link rel="stylesheet" href="{{ asset('/css/front/bootstrap.css') }}">    
</head>
<body class="cuerpo">  

    <div class="container">

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Marketing stuff!</h1>        
      </div>

        <div class="container-fluid">       
            <div class="input-group">
                <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                <!--buscador de tags con scope-->
                {!! Form::open(['route' => 'home.index', 'method' => 'GET', 'class' => 'pull-left']) !!}
                    <div class="form-group ">
                        {!! Form::Text('name',null,['class'=>'form-control', 'placeholder' => 'Buscar Articulo...', 'aria-describedby' => 'search']) !!}
                    </div>
                {!! Form::close() !!}
                <!--fin buscador -->
            </div>              
        </div>
        <hr>    
        <!-- Example row of columns -->
        <div class="row">        
        @foreach($articles as $article)

            <div class="col-lg-4">
                <h2>{{ substr($article->title,1,20) }}</h2>
                <p>{{ substr($article->content,1,200) }}</p>
                <img src="/images/articles/{{ $article->image[0] }}" class="img-responsive">
                <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
            </div>        

        @endforeach        
        </div>
        {!! $articles->render() !!}
      <!-- Site footer -->
      <footer class="footer">
        <p>© 2016 Company, Inc.</p>
      </footer>
    </div>
    <script src="{{ asset('/js/jquery/jquery-3.1.0.min.js') }}" type="text/javascript" async defer></script>
</body>
</html>           