@extends('main')
@section('content')
<h1>Create new Artile!</h1>
<div class="container">
	<div class="py-5 my-5" >
		<form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
			{{ csrf_field() }}

			<label class="form-group">
				<span>Title</span>
				<input id="title" name="title" for="title" class="form-control" type="text" placeholder="Title"  required/>
			</label>
			<br>
			<label class="form-group">
				<span>Article Body</span>
				<textarea id="body" name="body" for="body" class="form-control" type="text" required></textarea>
			</label>
			<br>
			<label class="form-group form-setting">
				<span>Media</span>
				<input id="media" name="media[]" class="form-control-file" type="file" multiple="multiple"/>
			</label>
			
			<button class="btn btn-lg btn-primary" type="submit">Submit</button>
		</form>
	</div>
</div>

	@section('extra-js')
		<script>
			document.getElementById('body').style.height="500px";
			document.getElementById('body').style.width="60vw";
		</script>
	@endsection
@endsection