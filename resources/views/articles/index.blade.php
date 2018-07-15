@extends('main')
<div class="container" style="margin-top: 150px">
	<a href="{{ route('admin.articles.create') }}" class="btn btn-lg btn-primary mb-5">
		Create new Article
	</a>
	<h1>Article List</h1>
	@foreach($articles as $article)
	<div class="row">
		<div class="col-4">
			@foreach($article->media as $pic)
			@if($loop->first)
				<img src="{{ '/storage/'.$pic->path }}" alt="" height="200" width="200">
			@endif
			@endforeach
		</div>
		<div class="col-6">
			<div class="title">
				<a href="{{ route('admin.articles.show', ['id' => $article->article_id]) }}">{{ $article->title }}</a>
			</div>
			<div class="body">
				<p>
					{{ substr($article->body, 0, 50) }}{{ strlen($article->body) > 100 ? '....' : '' }}
				</p>
			</div>
		</div>
		<div class="col-2">
			<form action="{{ route('admin.articles.edit', ['id' => $article->article_id]) }}" method="GET">
				<button type="submit" class="btn btn-primary btn-block btn-setting">Edit Vendor</button>
			</form>
			<form action="{{ route('admin.articles.destroy', ['id' => $article->article_id]) }}" method="POST">
				<input disabled type="hidden" name="_method" value="DELETE" />
				<button type="submit" class="btn btn-danger btn-block btn-setting">Delete Vendor</button>
				{!! csrf_field() !!}
			</form>
		</div>
	</div>
	<hr>
	@endforeach
</div>
@section('content')
@endsection