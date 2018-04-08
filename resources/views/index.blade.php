@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
@endsection

@section('content')
<div class="container">

	<div>
		<h1>Navigation</h1>
		<a href="{{ route('articles.create') }}">Create Article</a>
	</div>
	<h1>Articles</h1>
	@foreach($articles as $article)
		<h2>{{ $article->title }}</h2>
		<p>{{ $article->body }}</p>
	@endforeach    
</div>
@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> -->
@endsection
