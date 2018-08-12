@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
@endsection

@section('content')
<div class="tentang-kami-section" id="tentang-kami">
    <div class="row">
      <div class="col-6 col-sm-3">
          <a href="{{ route('literatur') }}" target="_blank" style="width: 100%;">
              <img src="{{ asset('img/kubus-literatur.png') }}" style="max-width: 100%; max-height: 100%;"
              onmouseover="this.src='{{ asset('img/kubus-literatur-clicked.png') }}'"
              onmouseout="this.src='{{ asset('img/kubus-literatur.png') }}'">
          </a>
      </div>
        <div class="col-md-9">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tentang-kami-section" id="tentang-kami">
    <div class="row">
      <div class="col-6 col-sm-3">
        <a href="{{ route('visual') }}" target="_blank" style="width: 100%;">
            <img src="{{ asset('img/kubus-visual.png') }}" style="max-width: 100%; max-height: 100%;"
            onmouseover="this.src='{{ asset('img/kubus-visual-clicked.png') }}'"
            onmouseout="this.src='{{ asset('img/kubus-visual.png') }}'">
        </a>
      </div>
        <div class="col-md-9">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tentang-kami-section" id="tentang-kami">
    <div class="row">
      <div class="col-6 col-sm-3">
        <a href="{{ route('video') }}" target="_blank" style="width: 100%;">
            <img src="{{ asset('img/kubus-video.png') }}" style="max-width: 100%; max-height: 100%;"
            onmouseover="this.src='{{ asset('img/kubus-video-clicked.png') }}'"
            onmouseout="this.src='{{ asset('img/kubus-video.png') }}'">
        </a>
      </div>
        <div class="col-md-9">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tentang-kami-section" id="tentang-kami">
    <div class="row">
      <div class="col-6 col-sm-3">
        <a href="{{ route('musik') }}" target="_blank" style="width: 100%;">
            <img src="{{ asset('img/kubus-musik.png') }}" style="max-width: 100%; max-height: 100%;"
            onmouseover="this.src='{{ asset('img/kubus-musik-clicked.png') }}'"
            onmouseout="this.src='{{ asset('img/kubus-musik.png') }}'">
        </a>
      </div>
        <div class="col-md-9">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="kontak-kami">

    <div class="row">
        <div class="col-sm-12 col-md-6">
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
        <div class="col-sm-12 col-md-6">
            <h1 id="send-email">SEND US MAIL!</h1>
            <div id="form">
                <form>
                    <div class="form-group row">
                        <label for="name" class="col-sm-12 col-md-4">
                            <span class="required">*</span>NAME :
                        </label>
                        <input id="name" class="form-control col-sm-12 col-md-8" type="text" name="NAME">
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-12 col-md-4">
                            <span class="required">*</span>E-MAIL :
                        </label>
                        <input id="email" class="form-control col-sm-12 col-md-8" type="email" name="E-MAIL">
                    </div>
                    <div class="form-group row">
                        <label for="subject" class="col-sm-12 col-md-4">
                            <span class="required">*</span>SUBJECT :
                        </label>
                        <input id="subject" class="form-control col-sm-12 col-md-8" type="text" name="SUBJECT">
                    </div>
                    <div class="form-group row">
                        <label for="comment" class="col-sm-12 col-md-4">
                            <span class="required">*</span>MESSAGE :
                        </label>
                        <textarea id="comment" class="form-control col-sm-12 col-md-8" name="comment" form="usrform"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> -->
@endsection
