@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
@endsection

@section('content')

<div class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading text-uppercase">HMIK UI 2018</div>
            <div class="intro-lead-in">Sinergis, Dekat, Berkelanjutan</div>
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
                <h3 class="text-uppercase title-2 opacity-60">Visi dan Misi</h3>
                <div class="misi-judul">
                    <h2 class="text-uppercase text-left">“Bersinergi dalam menciptakan HMIK UI yang dekat dan berkelanjutan.”</h2>
                </div>
                <ol class="misi">
                    <li>Melaksanakan program kerja yang didasari oleh data yang dikembangkan dari riset terhadap kebutuhan dan permasalahan.</li>
                    <li>Melakukan pengawasan terhadapat proses jalannya setiap program kerja secara berkelanjutan.</li>
                    <li>Menciptakan iklim & budaya organisasi yang mengedepankan sense of belonging dan pengembangan sistematika dan manajemen organisasi.</li>
                    <li>Mengoptimalkan advokasi kebutuhan dan minat bakat mahasiswa Ilmu Komunikasi UI.</li>
                    <li>Menampung gagasan dan aspirasi dari elemen lingkungan Komunikasi UI dan publik HMIK UI.</li>
                    <li>Menciptakan kolaborasi dan kemudahan akses informasi di antara publik internal dan eksternal HMIK UI.</li>
                </ol>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-5 col-lg-push-1 hidden-xs text-right">
                <br><br><br><br><br> <br>
                <h3 class="text-uppercase title-2 opacity-60">Sejarah</h3>
                <br>
                <p class="opacity-70">
HMIK UI 2017 memiliki harapan terhadap lingkungan Ilmu Komunikasi UI yang dapat berjalan secara sinergis. Dalam membangun harapan itu, HMIK UI 2017 menyadari bahwa banyak elemen-elemen penting yang terlibat, seperti mahasiswa, Program Sarjana dan Departemen Ilmu Komunikasi UI dan stakeholder lainnya. Oleh karena itu, HMIK UI 2017 menurunkan semangat bersinergi ke dalam nilai inisiatif dan kolaborasi. Inisiatif, berupaya sebagai penggerak dalam mencari tahu kebutuhan serta peka terhadap permasalahan yang ada. Upaya tersebut dilakukan dengan berpedoman pada pengembangan riset terhadap hal apa saja yang dibutuhkan oleh elemen-elemen yang ada di lingkungan Ilmu Komunikasi UI, khususnya mahasiswa dengan tujuan setiap program yang dibuat sesuai dengan target yang ingin dicapai. Kolaborasi, dengan melakukan langkah yang mengedepankan kerja sama di antara stakeholder dan dilandasi oleh semangat serta motivasi untuk mewujudkan suatu tujuan bersama. Upaya ini diharapkan mampu menggerakkan semua elemen dan dapat merangkul publik HMIK UI.</p>
            </div>
        </div>
    </div>
</div>

<div class="ruang-estetika" id="RE">
    <div class="header">
        <img src="{{ asset('img/header.png') }}" alt="Ruang Estetika" class="center">
    </div>
    <div class="cubes">
        <a class="col-3" href="{{ route('literatur')}}" target="_blank">
            <img id="lit" src="{{ asset('img/kubus-literatur.png') }}" width="20%"
            onmouseover="this.src='{{ asset('img/kubus-literatur-clicked.png') }}'"
            onmouseout="this.src='{{ asset('img/kubus-literatur.png') }}'"
            >
        </a>
        <a class="col-3" href="https://www.facebook.com/hmikui" target="_blank">
            <img id="vis" src="{{ asset('img/kubus-visual.png') }}" width="20%"
            onmouseover="this.src='{{ asset('img/kubus-visual-clicked.png') }}'"
            onmouseout="this.src='{{ asset('img/kubus-visual.png') }}'"
            >
        </a>
        <a class="col-3" href="https://www.facebook.com/hmikui" target="_blank">
            <img id="vid" src="{{ asset('img/kubus-video-.png') }}" width="20%"
            onmouseover="this.src='{{ asset('img/kubus-video-clicked.png') }}'"
            onmouseout="this.src='{{ asset('img/kubus-video-.png') }}'"
            >
        </a>
        <a class="col-3" href="https://www.facebook.com/hmikui" target="_blank">
            <img id="mus" src="{{ asset('img/kubus-musik-.png') }}" width="20%"
            onmouseover="this.src='{{ asset('img/kubus-musik-clicked.png') }}'"
            onmouseout="this.src='{{ asset('img/kubus-musik-.png') }}'"
            >
        </a>
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
    <div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="500">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-4 active">
                <img class="img-fluid mx-auto d-block" src="{{ asset('img/myhome1.jpg') }}" alt="slide 1">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="{{ asset('img/myhome1.jpg') }}" alt="slide 2">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="{{ asset('img/myhome1.jpg') }}" alt="slide 3">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="{{ asset('img/myhome1.jpg') }}" alt="slide 4">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="{{ asset('img/myhome1.jpg') }}" alt="slide 5">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="{{ asset('img/myhome1.jpg') }}" alt="slide 6">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="{{ asset('img/myhome1.jpg') }}" alt="slide 7">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="{{ asset('img/myhome1.jpg') }}" alt="slide 7">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div class="kontak-kami">
   
    <div class="row">
        <div class="column">
            <h1 class="title">KONTAK KAMI</h1>
            
            <div id="content">
                <h5>Himpunan Mahasiswa Ilmu Komunikasi<br/><br/></h5>
                <p>Sekretariat HMIK Universitas Indonesia<br/>
                    Gedung Komunikasi Fakultas Ilmu Sosial dan Politik<br/>
                    Ilmu Politik Universitas Indonesia Lt. 3<br/>
                    Depok | 16424 | Ph. (021) 78849014| Fax.<br/>
                    (021) 78840919
                </p>
                <p>
                    Website     : www.hmik.fisip.ui.ac.id<br/>
                    Twitter     : @hmikui<br/>
                    Instagram   : @hmikui<br/>
                    Facebook    : HMIK UI<br/>
                    Youtube     : HMIK UI
                </p>
            </div>
        </div>
    <div class="column">
        <h1 id="send-email">SEND US MAIL!</h1>
        <div id="form">
            <form>
                <span id="required">*</span>NAME :<input type="text" name="NAME"><br>
                <span id="required">*</span>E-MAIL :<input type="email" name="E-MAIL"><br>
                <span id="required">*</span>SUBJECT :<input type="text" name="SUBJECT"><br>
            </form>
            <span id="required">*</span>MESSAGE :<textarea name="comment" form="usrform"></textarea>
        </div>
    </div>
</div>


@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> -->
@endsection
