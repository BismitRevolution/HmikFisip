@extends('admin.layout.auth')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    You are logged in as Admin!
                </div>
                <div style="margin-top:200px; padding-top: 200px;">
                    <h1>Navigation</h1>
                    <button href="{{ route('admin.articles.create') }}" class="btn btn-primary btn-large">Create Article</button>
                    <button href="{{ route('admin.articles.create') }}" class="btn btn-primary btn-danger">Article</button>
                </div>

                <h1>Articles</h1>
                @foreach($articles as $article)
                <h2>{{ $article->title }}</h2>
                <br>
                <p>{{ $article->body }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection