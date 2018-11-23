@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
@endsection

@section('content')
<div class="header-section" id="header">
    <div class="hmik-logo">
        <a class="js-scroll-trigger" href="#header">
            <img class="row" src="{{ asset('img/logo.png') }}" alt="Logo HMIK" id="header-logo">
            <img class="row" src="{{ asset('img/logo-word.png') }}" alt="HMIK FISIP UI" id="header-logo-word">
        </a>
    </div>
    <img src="{{ asset('img/header-photo.jpg') }}" alt="Foto HMIK FISIP UI" class="row col-12" id="header-photo">
</div>


<div class="tentang-kami-section" id="tentang-kami">
    <div class="row">
        <div class="col-md-3 about-title">
            <h3><i><b>TENTANG KAMI</b></i></h3>
        </div>
        <div class="col-md-9">
            <ul class="nav mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                    <a class="nav-link active" id="pills-visimisi-tab" data-toggle="pill" href="#pills-visimisi" role="tab" aria-controls="pills-visimisi" aria-selected="true">VISI & MISI</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" id="pills-rancangan-tab" data-toggle="pill" href="#pills-rancangan" role="tab" aria-controls="pills-rancangan" aria-selected="false">RANCANGAN BESAR</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" id="pills-struktur-tab" data-toggle="pill" href="#pills-struktur" role="tab" aria-controls="pills-struktur" aria-selected="false">STRUKTUR</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" id="pills-sejarah-tab" data-toggle="pill" href="#pills-sejarah" role="tab" aria-controls="pills-sejarah" aria-selected="false">LOGO & SEJARAH</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-visimisi" role="tabpanel" aria-labelledby="pills-visimisi-tab">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 desc1">
                            <h4><br><b>VISI</b></h4>
                            <p><i>"Bersama Bermanfaat."</i></p>
                            <h4><br><b>MISI</b></h4>
                            <ol>
                                <li>Mengadakan seluruh program kerja HMIK UI berdasarkan riset terhadap permasalahan dan kebutuhan publik HMIK UI.</li>
                                <li>Menjadikan HMIK UI sebagai wadah aspirasi dari seluruh elemen Komunikasi UI.</li>
                                <li>Berperan secara aktif dan solutif dalam advokasi dan penyelesaian masalah mahasiswa Komunikasi UI.</li>
                                <li>Menciptakan budaya dan iklim organisasi HMIK UI yang solid dan profesional.</li>
                                <li>Mengoptimalkan penyaluran minat dan bakat mahasiswa Ilmu Komunikasi UI secara terbuka.</li>
                            </ol>
                        </div>
                        <div class="col-lg-4 col-md-12 more-click text-right" style="margin-top: 273px;">
                            <a href="#header" style="font-size: 1rem;"><i>TELUSURI LEBIH LANJUT >></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-rancangan" role="tabpanel" aria-labelledby="pills-rancangan-tab">
                    <div class="row">
                        <div class="col-lg-8 desc2">
                            <h4><br><b>RANCANGAN BESAR</b></h4>
                            <p>
                                <br>
                                <b>HMIK UI 2017</b> memiliki harapan terhadap lingkungan Ilmu Komunikasi UI yang dapat berjalan secara sinergis. Dalam membangun harapan itu, HMIK UI 2017 menyadari bahwa banyak elemen-elemen penting yang terlibat, seperti mahasiswa, Program Sarjana dan Departemen Ilmu Komunikasi UI dan stakeholder lainnya. Oleh karena itu, HMIK UI 2017 menurunkan semangat bersinergi ke dalam nilai inisiatif dan kolaborasi. Inisiatif, berupaya sebagai penggerak dalam mencari tahu kebutuhan serta peka terhadap permasalahan yang ada. Upaya tersebut dilakukan dengan berpedoman pada pengembangan riset terhadap hal apa saja yang dibutuhkan oleh elemen-elemen yang ada di lingkungan Ilmu Komunikasi UI, khususnya mahasiswa dengan tujuan setiap program yang dibuat sesuai dengan target yang ingin dicapai. Kolaborasi, dengan melakukan langkah yang mengedepankan kerja sama di antara stakeholder dan dilandasi oleh semangat serta motivasi untuk mewujudkan suatu tujuan bersama. Upaya ini diharapkan mampu menggerakkan semua elemen dan dapat merangkul publik HMIK UI.
                                <br><br>
                                Dalam mewujudkan visi dekat, HMIK UI 2017 melakukan upaya dan program kerja yang kehadirannya bisa dirasakan oleh publik, terutama mahasiswa Ilmu Komunikasi melalui penerapan nilai apresiatif. Bentuk apresiasi yang diberikan HMIK UI 2017, diantaranya adalah adanya keterbukaan informasi kepada publik secara dua arah dan pemenuhan kebutuhan mahasiswa dalam bidang akademis dan karir, advokasi sosial, serta minat bakat. Dengan adanya upaya ini, diharapkan HMIK UI 2017 tidak hanya mampu menyediakan wadah aspirasi maupun pemenuhan kebutuhan, tetapi juga melakukan pendekatan secara kultural dalam membangun relasi terkait dengan implementasi setiap program kerja yang dijalankan.
                                <br><br>
                                Bentuk relasi yang dibangun secara kultural diharapkan mampu menciptakan proses yang lebih mudah dalam menjalankan program kerja secara berkelanjutan. Dengan langkah tersebut, HMIK UI mencoba untuk dapat menyasar target setiap program kerja dengan menerapkan nilai bermanfaat dan sistem pengawasan secara berkala. Dengan dasar kebermanfaatan, program kerja HMIK UI 2017 dapat dibuat sesuai dengan kebutuhan dan permasalahan yang ada dan eksistensinya dapat terus bisa dirasakan dalam jangka waktu yang lama.
                            </p>
                        </div>
                        <div class="col-lg-4 more-click text-right" style="margin-top: 711px;">
                            <a href="#header" style="font-size: 1rem;"><i>TELUSURI LEBIH LANJUT >></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-struktur" role="tabpanel" aria-labelledby="pills-struktur-tab">
                    <div class="row">
                        <div class="col-lg-8 desc3">
                            <h4><br><b>STRUKTUR</b></h4>
                            <img src="{{ asset('img/bagan.png') }}" alt="Bagan HMIK FISIP UI" id="struktur-organisasi">
                        </div>
                        <div class="col-lg-4 more-click text-right" style="margin-top: 505px;">
                            <a href="#header" style="font-size: 1rem;"><i>TELUSURI LEBIH LANJUT >></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-sejarah" role="tabpanel" aria-labelledby="pills-sejarah-tab">
                    <div class="row">
                        <div class="col-lg-8 desc4">
                            <h4><br><b>RANCANGAN BESAR</b></h4>
                            <p>
                                <br>
                                Himpunan Mahasiswa Ilmu Komunikasi Universitas Indonesia (HMIK UI) didirikan pada tanggal 12 Desember 1990 sebagai wadah kemahasiswaan  mahasiswa S1 Departemen Ilmu Komunikasi dan organisasi berbasis keilmuan yang berada dalam Fakultas Ilmu Sosial dan Ilmu Politik Universita Indonesia. HMIK berstatus otonom dalam Ikatan Keluarga Mahasiswa Fakultas Ilmu Sosial dan Ilmu Politik Universitas Indonesia. HMIK UI berasaskan kekeluargaan dan memiliki fungsi untuk ikut serta dalam tridharma perguruan tinggi, mengembangkan minat dan bakat mahasiswa Ilmu Komunikasi UI, dan membangun serta memelihara ikatan kekeluargaan antar anggota. HMIK UI juga berperan aktif dalam penerapan ilmu komunikasi dalam peran serta dalam pemecahan masalah sosial yang terjadi di masyarakat. Hal itu diwujudkan dengan program kerja tahunan yaitu Pekan Komunikasi sebuah acara keilmuan nasional yang berisi seminar, workshop, dan perlombaan mengenai Ilmu Komunikasi yang dibahas dari lima peminatan yang dipelajari di Ilmu Komunikasi UI yaitu Hubungan Masyarakat, Periklanan, Jurnalisme, Penyiaran, dan Kajian Media.
                                <br><br>
                                Lambang HMIK merupakan gabungan dari dua objek, yaitu kobaran api dan lingkaran. Kobaran api merepresentasikan mahasiswa yang berada di bawah naungan HMIK UI senantiasa mempunyai semangat untuk terus bersinergi mencapai tujuan bersama. Lingkaran menggambarkan gerakan yang dilakukan tidak linier, akan selalu berulang dan bersifat dinamis. Gabungan dari kedua objek ini membentuk figur matahari sebagai simbol kreativitas yang tanpa batas dan tidak akan ada habisnya. Tulisan HMIK merupakan kependekan dari Himpunan Mahasiswa Ilmu Komunikasi, Lambang Makara UI melambangkan organisasi ini berada dalam lingkungan Universitas Indonesia. Lambang HMIK UI terdiri dari tiga warna, yaitu hijau turquoise, merah, dan jingga kekuningan. Ketiga warna ini menggambarkan tiga prinsip utama HMIK UI. Warna hijau turquoise mempunyai makna kecerdasan tinggi, teknologi, dan kecanggihan, representasi dari prinsip ilmiah. Kemudian warna jingga kekungingan bermakna persahabatan, antusiasme, dan kebahagiaan, representasi dari prinsip sosial. Dan warna merah mempunyai arti ambisi untuk mencapai tujuan, kepemimpinan, dan penghormatan, mewakili prinsip profesional.
                            </p>
                        </div>
                        <div class="col-lg-4 more-click text-right" style="margin-top: 667px;">
                            <a href="#header" style="font-size: 1rem;"><i>TELUSURI LEBIH LANJUT >></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="profil-section" id="profil">
    <div class="row" style="margin-bottom: 30px;">
        <div class="col-sm-12 text-right profile-title">
            <h3><i><b>PROFIL</b></i></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="div-img col-md-4">
                    <div class="divisi" id="divisi-01">
                        <div class="image-profile" style="background-image: url({{ asset('img/BPH.jpg') }});"></div>
                        <a href="{{ route('profile.show.bph') }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>PENGURUS INTI</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"Mewujudkan organisasi yang progresif dan suportif terhadap publik HMIK UI 2018"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="div-img col-md-4">
                    <div class="divisi" id="divisi-02">
                        <div class="image-profile" style="background-image: url({{ asset('img/Adkesma.jpg') }});"></div>
                        <a href="{{ route('profile.show.adkesma') }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>BIDANG ADVOKASI DAN SOSIAL</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"Mewujudkan advokasi sosial yang progresif dan suportif terhadap publik HMIK UI 2018"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="div-img col-md-4">
                    <div class="divisi" id="divisi-03">
                        <div class="image-profile" style="background-image: url({{ asset('img/Humas.jpg') }});"></div>
                        <a href="{{ route('profile.show.humas') }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>BIDANG HUMAS</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"Mewujudkan humas yang progresif dan suportif terhadap publik HMIK UI 2018"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="div-img col-md-4 text-center">
                    <div class="divisi" id="divisi-04">
                        <div class="image-profile" style="background-image: url({{ asset('img/Depor.jpg') }});"></div>
                        <a href="{{ route('profile.show.depor') }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>BIDANG MINAT DAN BAKAT</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"Mewujudkan minat dan bakat yang progresif dan suportif terhadap publik HMIK UI 2018"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="div-img col-md-4 text-center">
                    <div class="divisi" id="divisi-05">
                        <div class="image-profile" style="background-image: url({{ asset('img/Psdm.jpg') }});"></div>
                        <a href="{{ route('profile.show.psdm') }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>BIRO PSDM</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"Mewujudkan psdm yang progresif dan suportif terhadap publik HMIK UI 2018"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="div-img col-md-4 text-center">
                    <div class="divisi" id="divisi-06">
                        <div class="image-profile" style="background-image: url({{ asset('img/Keuangan.jpg') }});"></div>
                        <a href="{{ route('profile.show.keuangan') }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>BIRO KEUANGAN</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"Mewujudkan keuangan yang progresif dan suportif terhadap publik HMIK UI 2018"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<div class="text-center green-dark" style="margin-top: 35px;">
    <h1 style="font-family: 'Benton'; letter-spacing: 5px; word-spacing: 10px; text-shadow: -2px 2px var(--color-yellow-dark);">POJOK MAHASISWA</h1>
</div>

<div id="pojok-mahasiswa" class="bg-green-dark white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 row text-center" style="display: block;">
                <img class="col-12" src="{{ asset('img/komunikasi-101.png') }}" alt="">
                <div class="col-12">
                    <h5 class="title">KOMUNIKASI 101</h5>
                    <p class="paragraph">KOM 101 hadir untuk membantu kalian dengan menyediakan informasi-informasi seputar komunikasi, perkuliahan, dan lain-lain.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 row text-center" style="display: block;">
                <img class="col-12" src="{{ asset('img/portal-keilmuan.png') }}" alt="">
                <div class="col-12">
                    <h5 class="title">PORTAL KEILMUAN</h5>
                    <p class="paragraph">Portal Keilmuan menyediakan berbagai macam bahan bacaan seperti materi UTS, UAS, hingga bahan bacaan sastra.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 row text-center" style="display: block;">
                <img class="col-12" src="{{ asset('img/ruang-aspirasi.png') }}" alt="">
                <div class="col-12">
                    <h5 class="title">RUANG ASPIRASI</h5>
                    <p class="paragraph">Ayo, sampaikan aspirasimu melalui Ruang Aspirasi!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container ruang-estetika" id="RE">
    <div class="text-center" style="margin-bottom: 45px;">
        <img src="{{ asset('img/header.png') }}" alt="Ruang Estetika" style="max-width: 300px;">
    </div>
    <div class="row">
        <div class="col-6 col-sm-3">
            <a href="{{ route('literatur') }}" target="_blank" style="width: 100%;">
                <img src="{{ asset('img/kubus-literatur.png') }}" style="max-width: 100%; max-height: 100%;"
                onmouseover="this.src='{{ asset('img/kubus-literatur-clicked.png') }}'"
                onmouseout="this.src='{{ asset('img/kubus-literatur.png') }}'">
            </a>
        </div>
        <div class="col-6 col-sm-3">
            <a href="{{ route('visual') }}" target="_blank" style="width: 100%;">
                <img src="{{ asset('img/kubus-visual.png') }}" style="max-width: 100%; max-height: 100%;"
                onmouseover="this.src='{{ asset('img/kubus-visual-clicked.png') }}'"
                onmouseout="this.src='{{ asset('img/kubus-visual.png') }}'">
            </a>
        </div>
        <div class="col-6 col-sm-3">
            <a href="{{ route('video') }}" target="_blank" style="width: 100%;">
                <img src="{{ asset('img/kubus-video.png') }}" style="max-width: 100%; max-height: 100%;"
                onmouseover="this.src='{{ asset('img/kubus-video-clicked.png') }}'"
                onmouseout="this.src='{{ asset('img/kubus-video.png') }}'">
            </a>
        </div>
        <div class="col-6 col-sm-3">
            <a href="{{ route('musik') }}" target="_blank" style="width: 100%;">
                <img src="{{ asset('img/kubus-musik.png') }}" style="max-width: 100%; max-height: 100%;"
                onmouseover="this.src='{{ asset('img/kubus-musik-clicked.png') }}'"
                onmouseout="this.src='{{ asset('img/kubus-musik.png') }}'">
            </a>
        </div>
    </div>
</div>

<div class="artikel-section" id="artikel">
    <div class="row">
        <div class="col-md-9 carousel-place">
            <!--carousel-->
            <!--<div class="container">-->
            <!--<div class="row">-->
            <!-- "data-items" number of item showed for xs, sm, md, lg, xl-->
            <!-- "data-slide" number of item will be slided when clikced-->
            <div class="MultiCarousel" data-items="2.5,3,3,3,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    @foreach($articles as $article)
                    <div class="item">
                        <div class="pad10" id="article-01">
                            @foreach($article->media as $pic)
							@if($loop->first)
                            <!-- <div class="image-profile" style="background-image: url({{ '/storage/'.$pic->path }})"></div> -->
                            <img src="{{ '/storage/'.$pic->path }}" class="image-profile">
							@endif
							@endforeach
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="filter-event">
                                        <i>Artikel</i><br>
                                    </span>
                                    <span class="judul-event">
                                        <b>{{ $article->title }}</b></br>
                                    </span>
                                    <span class="tanggal-event">
                                        {{ $article->created_at }}<br><br><br>
                                    </span>
                                    <span class="desc-event">
                                        {{ substr($article->body, 0, 50) }}{{ strlen($article->body) > 100 ? '....' : '' }}<br><br>
                                    </span>
                                    <a class="read-more" href="#">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="btn btn-primary leftLst"><b>V</b></button>
                <button class="btn btn-primary rightLst"><b>V</b></button>
                <!--</div>-->
            </div>
            <!--</div>-->
        </div>
        <div class="col-md-3 text-left article-title">
            <h3><i><b>ARTIKEL</b></i></h3>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> -->
@endsection
