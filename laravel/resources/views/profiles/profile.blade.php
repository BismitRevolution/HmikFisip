@extends('main')

@section('content')
	<div class="container profile-page">
        <div class="row">
            <div class="col-8" "description-section">
                <div class="nama-divisi">
                    {{ $bidang->divisi }}
                </div>
				<br>
                <div class="foto-divisi">
                    <img src="{{ asset('img/' . $bidang->url_foto) }}" alt="{{ $bidang->divisi }}" class="image-profile">
                </div>
				<br>
                <div class="judul-teks">VISI</div>
				<br>
                <div class="desc">
                    {{ $bidang->visi }}
                </div>
				<br>
                <div class="judul-teks">MISI</div>
				<br>
                <div class="desc">
                    {{ $bidang->misi }}
                </div>
				<br>
                <div class="judul-teks">PROGRAM KERJA</div>
				<br>
                <div class="desc">
                    {{ $bidang->program }}
                </div>
            </div>
            <div class="col-4">
                @include('profiles.side-bar')
			</div>
        </div>
    </div>
@endsection
