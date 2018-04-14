@extends('main')
@section('content')
<h1>Create new Artile!</h1>
<div class="container">
	<form method="POST" action="{{ route('articles.store') }}">
		{{ csrf_field() }}
		<label class="form-group">
			<span>Author</span>
			<input id="author_id" name="author_id" for="author_id" class="form-control" type="text" placeholder="Author ID" required/>
		</label>

		<label class="form-group">
			<span>Title</span>
			<input id="title" name="title" for="title" class="form-control" type="text" placeholder="title"  required/>
		</label>

		<label class="form-group">
			<span>Article Body</span>
			<input id="body" name="body" for="body" class="form-control" type="text" placeholder="Article body"  required/>
		</label>


		{{-- TO:DO, Tags --}}
		{{-- TO:DO, make a upload image or video --}}
		
		<button class="btn btn-lg btn-primary" type="submit">Submit</button>
	</form>
</div>
@endsection