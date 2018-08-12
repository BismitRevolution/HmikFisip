@if(Request::is('literatur') || Request::is('visual') || Request::is('video') || Request::is('musik'))
<br>
<nav class="navbar navbar-expand-lg fixed-top navbar-light new-navbar unscrolled-navbar ">
    <div class="navbar-brand">
        <div id="logo"></div>
        <a class="js-scroll-trigger" href="#home">
            <img src="{{ asset('img/logo.png') }}" alt="Logo HMIK" class="unchange-brand-position" id="nav-logo">
            <img src="{{ asset('img/logo-word.png') }}" alt="HMIK FISIP UI" class="unchange-brand-position margin-increase" id="nav-logo-word">
        </a>
    </div>

    <div class="container-fluid">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="nav navbar-nav text-uppercase ml-auto text-center">
                <li class="nav-item home-link"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#header">HOME</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#tentang-kami">TENTANG KAMI</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#profil">PROFIL</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#pojok-mahasiswa">POJOK MAHASISWA</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#ruang-estetika">RUANG ESTETIKA</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#artikel">ARTIKEL</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#event">EVENT</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#kontak-kami">KONTAK KAMI</a></li>
            </ul>
        </div>
    </div>
</nav>

@else
<div id="navbar-on">
  <nav class="navbar navbar-expand-lg fixed-top navbar-light new-navbar">
    <div class="navbar-brand">
      <div class="background-logo" id="logo"></div>
      <a class="js-scroll-trigger" href="#home">
        <img src="{{ asset('img/logo.png') }}" alt="Logo HMIK" class="navbar-logo" id="nav-logo">
        <img src="{{ asset('img/logo-word.png') }}" alt="HMIK FISIP UI" class="navbar-logo" id="nav-logo-word">
      </a>
    </div>

    <div class="container-fluid navbar-container">
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-main">
        <ul class="nav navbar-nav text-uppercase ml-auto text-center">
          <li class="nav-item home-link"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#header">HOME</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#tentang-kami">TENTANG KAMI</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#profil">PROFIL</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#pojok-mahasiswa">POJOK MAHASISWA</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#ruang-estetika">RUANG ESTETIKA</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#artikel">ARTIKEL</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#event">EVENT</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#kontak-kami">KONTAK KAMI</a></li>
        </ul>
      </div>
    </div>
  </nav>

</div>
@endif
