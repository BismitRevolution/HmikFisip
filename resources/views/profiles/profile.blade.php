@extends('main')

@section('content')
	<div class="container profile-page">
        <div class="row">
            <div class="col-md-7" "description-section">
                <div class="nama-divisi">
                    @yield('nama-divisi')
                </div>
                <div class="foto-divisi">
                    @yield('foto-divisi')
                </div>
                <div class="judul-teks">VISI</div>
                <div class="desc">
                    @yield('visi-divisi')
                </div>
                <div class="judul-teks">MISI</div>
                <div class="desc">
                    @yield('misi-divisi')
                </div>
                <div class="judul-teks">PROGRAM KERJA</div>
                <div class="desc">
                    @yield('proker-divisi')
                </div>
            </div>
            <div class="col-md-5">
                @yield('side-bar')
			</div>
        </div>
		<div class="footer">
            Copyright - HMIK UI
        </div>
    </div>

@endsection
