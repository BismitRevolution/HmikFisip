@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
@endsection

@section('content')
<<<<<<< HEAD
<div class="header-section" id="header">
    <div class="hmik-logo">
        <a class="js-scroll-trigger" href="#header">
            <img class="row" src="{{ asset('img/logo.png') }}" alt="Logo HMIK" id="header-logo">
            <img class="row" src="{{ asset('img/logo-word.png') }}" alt="HMIK FISIP UI" id="header-logo-word">
        </a>
||||||| merged common ancestors
<div class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading text-uppercase">HMIK UI 2018</div>
            <div class="intro-lead-in">Sinergis, Dekat, Berkelanjutan</div>
        </div>
=======

<div class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading text-uppercase">HMIK UI 2018</div>
            <div class="intro-lead-in">Sinergis, Dekat, Berkelanjutan</div>
        </div>
>>>>>>> master
    </div>
    <img src="{{ asset('img/header-photo.jpg') }}" alt="Foto HMIK FISIP UI" class="row col-12" id="header-photo">
</div>


<div class="tentang-kami-section" id="tentang-kami">
    <div class="row">
        <div class="col-md-3 about-title">
            <h3><i>TENTANG KAMI</i></h3>
        </div>
        <div class="col-md-9">
            <ul class="nav mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-visimisi-tab" data-toggle="pill" href="#pills-visimisi" role="tab" aria-controls="pills-visimisi" aria-selected="true">VISI & MISI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-rancangan-tab" data-toggle="pill" href="#pills-rancangan" role="tab" aria-controls="pills-rancangan" aria-selected="false">RANCANGAN BESAR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-struktur-tab" data-toggle="pill" href="#pills-struktur" role="tab" aria-controls="pills-struktur" aria-selected="false">STRUKTUR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-sejarah-tab" data-toggle="pill" href="#pills-sejarah" role="tab" aria-controls="pills-sejarah" aria-selected="false">LOGO & SEJARAH</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-visimisi" role="tabpanel" aria-labelledby="pills-visimisi-tab">
                    <div class="row">
                        <div class="col-lg-8 desc1">
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
                        <div class="col-lg-4 more-click">
                            <a href="#header"><i>TELUSURI LEBIH LANJUT >></i></a>
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
                        <div class="col-lg-4 more-click">
                            <a href="#header"><i>TELUSURI LEBIH LANJUT >></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-struktur" role="tabpanel" aria-labelledby="pills-struktur-tab">
                    <div class="row">
                        <div class="col-lg-8 desc3">
                            <h4><br><b>STRUKTUR</b></h4>
                            <img src="{{ asset('img/bagan.png') }}" alt="Bagan HMIK FISIP UI" id="struktur-organisasi">
                        </div>
                        <div class="col-lg-4 more-click">
                            <a href="#header"><i>TELUSURI LEBIH LANJUT >></i></a>
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
                        <div class="col-lg-4 more-click">
                            <a href="#header"><i>TELUSURI LEBIH LANJUT >></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!--<div class="tentang-kami-section" id="tentang-kami">
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
</div>-->



@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> -->
@endsection
