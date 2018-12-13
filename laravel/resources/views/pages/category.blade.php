@extends('main')

@section('title', $category)

@section('content')
	<div class="container profile-page">
        <div class="row">
			@if($articles->isEmpty())
			Belum ada konten
			@endif
            @foreach($articles as $article)
            <div class="col-8 offset-2 description-section">
                <div class="nama-divisi">
                    <b>{{ $article->title }}</b>
                </div>
				<br>
                <div class="foto-divisi">
                    @foreach($article->media as $pic)
                    @if($loop->first)
                    <!-- <div class="image-profile" style="background-image: url({{ '/storage/'.$pic->path }})"></div> -->
                    <img src="{{ '/storage/'.$pic->path }}" class="image-profile">
                    @endif
                    @endforeach
                </div>
				<br>
                <div class="judul-teks">Dipost</div>
				<br>
                <div class="desc">
                    {{ $article->created_at }}
                </div>
				<br>
                <div class="judul-teks"></div>
				<br>
                <div class="desc">
                    {{ substr($article->body, 0, 50) }}{{ strlen($article->body) > 100 ? '....' : '' }}<br><br>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
