<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{$article->title}}</title>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap/css/bootstrap.css') }}">
	<script src="{{ asset('/css/bootstrap/js/bootstrap.js') }}" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<div><h1>{{$article->title}}</h1></div>
	<div><hr>{{$article->content}}</hr></div>
	<div><hr>{{$article->user->name}} / {{$article->category->name}} / Tags:

	@foreach($article->tags as $tag)
		{{ $tag->name }} |
	@endforeach

	</hr></div>
</body>
</html>