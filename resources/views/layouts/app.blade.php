<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Belajar Online USM PKN STAN Kekinian | Yukbimbel.com</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar is-transparent">
        <div class="navbar-brand">
          <a class="navbar-item" href="{{route('home')}}">
            <img src="{{asset('img/logo.svg')}}" alt="Belajar Online USM PKN STAN Kekinian | Yukbimbel.com" width="150" height="80">
          </a>
          <div class="navbar-burger burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div id="navMenu" class="navbar-menu">
          <div class="navbar-start">
            <a href="#" class="navbar-item">Tentang Kami</a>
            <div class="navbar-item has-dropdown is-hoverable">
              <div class="navbar-link">
                Produk Kami
              </div>
              <div id="moreDropdown" class="navbar-dropdown ">
                <a class="navbar-item " href="{{route('yukbelajar')}}">
                  <div class="media">
                    <div class="media-left">
                      <span class="icon is-large has-text-success">
                        <i class="fa fa-rocket fa-2x"></i>
                      </span>
                    </div>
                    <div class="media-content">
                      <p>
                        <strong>Yukbelajar</strong>
                        <br>
                        <small>#BelajarJadiLuarBiasa</small>
                      </p>
                    </div>
                  </div>
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item " href="#">
                  <div class="media">
                    <div class="media-left">
                      <span class="icon is-large has-text-primary">
                        <i class="fa fa-certificate fa-2x"></i>
                      </span>
                    </div>
                    <div class="media-content">
                      <p>
                        <strong>Yukbahassoal</strong>
                        <br>
                        <small>#BelajarJadiPraktis</small>
                      </p>
                    </div>
                  </div>
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item " href="#">
                  <div class="media">
                    <div class="media-left">
                      <span class="icon is-large has-text-link">
                        <i class="fa fa-book fa-2x"></i>
                      </span>
                    </div>
                    <div class="media-content">
                      <p>
                        <strong>Yuktryout</strong>
                        <br>
                        <small>#SiapMasukPKNSTAN</small>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <a href="#" class="navbar-item">Blog</a>
            <a href="#" class="navbar-item">Bantuan</a>
          </div>

          <div class="navbar-end">
            <div class="navbar-item">
              <div class="field is-grouped">
                <p class="control">
                  <a class="button" href="#">
                    <span class="icon">
                      <i class="fa fa-user"></i>
                    </span>
                    <span>
                      Masuk
                    </span>
                  </a>
                </p>
                <p class="control">
                  <a class="button is-primary" href="#">
                    <span class="icon">
                      <i class="fa fa-user-plus"></i>
                    </span>
                    <span>Berlangganan</span>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    @yield('content')

    <footer class="footer">
      <div class="container">
        <div class="columns">
          <div class="column is-4">
            <h1 class="title">Yukbimbel.</h1>
            <h2 class="subtitle is-size-6 m-t-20">Yukbimbel.com adalah solusi belajar online untuk para pelajar di Indonesia,
              khususnya dalam persiapan USM PKN STAN. Raih impianmu untuk kuliah dan belajar di PKN STAN.
            </h2>
          </div>
          <div class="column is-4">
            <h1 class="title is-size-4">Tentang Yukbimbel</h1>
            <ul style="list-style:none;" class="is-size-5">
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Produk Kami</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Kontak</a></li>
            </ul>
          </div>
          <div class="column">
            <h1 class="title is-size-4">Ikuti Kami</h1>
            <a href="#"><i class="fa fa-facebook-square fa-3x has-text-black"></i></a>
            <a href="#"><i class="fa fa-twitter-square fa-3x m-l-20 has-text-black"></i></a>
          </div>
        </div>
      </div>
    </footer>
</body>
@yield('js')
</html>
