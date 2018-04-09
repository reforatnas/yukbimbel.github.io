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
            <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
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
            <a href="#" class="navbar-item">Produk Kami</a>
            <a href="#" class="navbar-item">Blog</a>
            <a href="#" class="navbar-item">Bantuan</a>
          </div>

          <div class="navbar-end">
            <div class="navbar-item">
              <div class="field is-grouped">
                <p class="control">
                  <a class="button" href="#">
                    <span class="icon">
                      <i class="mdi mdi-account mdi-24px"></i>
                    </span>
                    <span>
                      Masuk
                    </span>
                  </a>
                </p>
                <p class="control">
                  <a class="button is-primary" href="#">
                    <span class="icon">
                      <i class="mdi mdi-account-plus mdi-24px"></i>
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
</body>
</html>
