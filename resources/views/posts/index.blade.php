@extends('main')
	@foreach($articles as $article)
		<h1>{{ $article->title }}</h1>
		<p>{{ $article->body }}</p>
	@endforeach
@section('content')
@endsection