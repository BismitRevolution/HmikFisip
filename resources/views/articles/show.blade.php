@extends('main')
@section('content')	
	<h1>{{ $article->title }}</h1>
	<small>{{  date('D, j M y, h:ia', strtotime($article->updated_at)) }}</small>	
	<hr>
	<p>{{ $article->body }}</p>
@endsection