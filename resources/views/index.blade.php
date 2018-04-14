@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
@endsection

@section('content')
<div class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading text-uppercase">
                <p style="background-color:rgba(200,100,80,0.85)" id="judul-hmik">HMIK UI 2018</p>
            </div>
            <div class="intro-lead-in">
                <p id="motto">Sinergis, Dekat, Berkelanjutan</p>
            </div>
        </div>
    </div>
</div>

<div class="tentang-kami" id="About">
    <div class="container">
        <div class="col-md-12 text-center judul">
            <h1>Tentang Kami</h1>
        </div>
        <div class="col-lg-12 row">
            <div class="col-lg-6">
                <h3 class="text-uppercase title-2 opacity-60">MISI</h3>
                <br>
                <div class="misi-judul">
                    <ol class="misi text-left">
                        <li>Melaksanakan program kerja yang didasari oleh data yang dikembangkan dari riset terhadap kebutuhan dan permasalahan.</li>
                        <li>Melakukan pengawasan terhadapat proses jalannya setiap program kerja secara berkelanjutan.</li>
                        <li>Menciptakan iklim & budaya organisasi yang mengedepankan sense of belonging dan pengembangan sistematika dan manajemen organisasi.</li>
                        <li>Mengoptimalkan advokasi kebutuhan dan minat bakat mahasiswa Ilmu Komunikasi UI.</li>
                        <li>Menampung gagasan dan aspirasi dari elemen lingkungan Komunikasi UI dan publik HMIK UI.</li>
                        <li>Menciptakan kolaborasi dan kemudahan akses informasi di antara publik internal dan eksternal HMIK UI.</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-6 col-lg-push-1 hidden-xs">
                <h3 class="text-uppercase title-2 opacity-60 text-right">VISI</h3>
                <br><br><br>
                <h2 class="text-uppercase text-right"><br>“Bersinergi dalam menciptakan HMIK UI yang dekat dan berkelanjutan.”<br></h2>
            </div>
        </div>
    </div>
</div>

<div class="artikel-oke" id="Artikel">
    <div class="container">
        <div class="col-md-12 text-center judul">
            <h1>Artikel</h1>
        </div>
        <div class="col-lg-12 row">
            <div class="col-lg-9">
                <div id="slide-artikel" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#slide-artikel" data-slide-to="0" class="active"></li>
                        <li data-target="#slide-artikel" data-slide-to="1"></li>
                        <li data-target="#slide-artikel" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/Eko-Razaki-copy.jpg') }}" alt="Artikel1" width="1100" height="500">
                            <div class="carousel-caption">
                                <h3>Gambar 1</h3>
                                <p>Mantab!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/Kecupan-Sinar-Rembulan.jpg') }}" alt="Artikel2" width="1100" height="500">
                            <div class="carousel-caption">
                                <h3>Gambar2</h3>
                                <p>Mantabsss!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/myhome1.jpg') }}" alt="Artikel3" width="1100" height="500">
                            <div class="carousel-caption">
                                <h3>Gambar3</h3>
                                <p>Mantabssssss!</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slide-artikel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#slide-artikel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-2 col-lg-push-1">
                <p>AAAA</p>
            </div>
        </div>
    </div>
</div>

<div class="profil-oke" id="Profil">
    <div id="wrapper">
    	<div id="slider">
    		<div class="slide" style="background-image: url('..img/Aqila-Mazi.jpg');">
                <img src="{{ asset('img/myhome1.jpg') }}">
    			<div class="slide-block">
    				<h4>Ice Age</h4>
    				<p>Heading south to avoid a bad case of global frostbite, a group of migrating misfit creatures embark on a hilarious quest to reunite a human baby with his tribe.</p>
    			</div>
    		</div>

    		<div class="slide" style="background-image: url('..img/Eko-Razaki-copy.jpg');">
                <img src="{{ asset('img/myhome1.jpg') }}">
    			<div class="slide-block">
    				<h4>For The Birds</h4>
    				<p>For the Birds is an animated short film, produced by Pixar Animation Studios released in 2000. It is shown in a theatrical release of the 2001 Pixar feature film Monsters, Inc.</p>
    			</div>
    		</div>

            <div class="slide" style="background-image: url('..img/Eko-Razaki-copy.jpg');">
                <img src="{{ asset('img/myhome1.jpg') }}">
                <div class="slide-block">
                    <h4>For The Birds</h4>
                    <p>For the Birds is an animated short film, produced by Pixar Animation Studios released in 2000. It is shown in a theatrical release of the 2001 Pixar feature film Monsters, Inc.</p>
                </div>
            </div>

            <div class="slide" style="background-image: url('..img/Eko-Razaki-copy.jpg');">
                <img src="{{ asset('img/myhome1.jpg') }}">
    			<div class="slide-block">
    				<h4>For The Birds</h4>
    				<p>For the Birds is an animated short film, produced by Pixar Animation Studios released in 2000. It is shown in a theatrical release of the 2001 Pixar feature film Monsters, Inc.</p>
    			</div>
    		</div>

            <div class="slide" style="background-image: url('..img/Eko-Razaki-copy.jpg');">
                <img src="{{ asset('img/myhome1.jpg') }}">
    			<div class="slide-block">
    				<h4>For The Birds</h4>
    				<p>For the Birds is an animated short film, produced by Pixar Animation Studios released in 2000. It is shown in a theatrical release of the 2001 Pixar feature film Monsters, Inc.</p>
    			</div>
    		</div>

            <div class="slide" style="background-image: url('..img/Eko-Razaki-copy.jpg');">
                <img src="{{ asset('img/myhome1.jpg') }}">
    			<div class="slide-block">
    				<h4>For The Birds</h4>
    				<p>For the Birds is an animated short film, produced by Pixar Animation Studios released in 2000. It is shown in a theatrical release of the 2001 Pixar feature film Monsters, Inc.</p>
    			</div>
    		</div>

    		<div class="slide" style="background-image: url('..img/myhome1.jpg');">
                <img src="{{ asset('img/myhome1.jpg') }}">
    			<div class="slide-block">
    				<h4>UP</h4>
    				<p>A comedy adventure in which 78-year-old Carl Fredricksen fulfills his dream of a great adventure when he ties thousands of balloons to his house and flies away to the wilds of South America.</p>
    			</div>
    		</div>

            <div class="slide" style="background-image: url('..img/Aqila-Mazi.jpg');">
                <img src="{{ asset('img/fotoContoh.jpg') }}">
                <div class="slide-block">
                    <h4>Ice Age</h4>
                    <p>Heading south to avoid a bad case of global frostbite, a group of migrating misfit creatures embark on a hilarious quest to reunite a human baby with his tribe.</p>
                </div>
            </div>

            <div class="slide" style="background-image: url('..img/Eko-Razaki-copy.jpg');">
                <img src="{{ asset('img/myhome1.jpg') }}">
                <div class="slide-block">
                    <h4>For The Birds</h4>
                    <p>For the Birds is an animated short film, produced by Pixar Animation Studios released in 2000. It is shown in a theatrical release of the 2001 Pixar feature film Monsters, Inc.</p>
                </div>
            </div>

    	</div>
    </div>
</div>



@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> -->
@endsection
