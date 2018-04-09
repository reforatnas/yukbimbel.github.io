@extends('layouts.app')

@section('content')

<!-- Hero / Header -->
<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <div class="columns">

        <div class="column is-6 m-t-30">
          <h1 class="title">
            Belajar Online USM PKN STAN Pertama, Terbaik & Terlengkap!
          </h1>
          <h2 class="subtitle m-t-10 p-l-50">
            <ul>
              <li>Solusi belajar online persiapan USM PKN STAN</li>
              <li>Dirancang khusus oleh pengajar terbaik & berpengalaman</li>
              <li>Sesuai dengan materi USM PKN STAN</li>
              <li>100% lulus USM PKN STAN</li>
              <li>Daftar sekarang, dan coba materi gratisnya</li>
            </ul>
          </h2>
          <a href="#" class="button is-primary is-large is-link">Mulai Belajar</a>
        </div>

        <div class="column is-6">
          <figure class="image is-3by2">
            <img src="{{asset ('img/cewe-1.svg')}}" alt="Karakter Wanita Yukbimbel Versi 1">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="about" class="section">
  <div class="container">
    <div class="columns is-variable is-8">

      <div class="column is-6">
        <figure class="image is-3by2">
          <img src="{{asset ('img/cewe-2.svg') }}" alt="Karakter Wanita Yukbimbel Versi 2">
        </figure>
      </div>

      <div class="content column is-6">
        <h1 class="tittle has-text-weight-bold">Belajar Online USM PKN STAN Kekinian!</h1>
        <h2 class="subttitle is-size-5">Yukbimbel merupakan solusi dan jawaban terbaik bagi kamu yang
                              ingin masuk PKN STAN. Konten yang tersedia dirancang khusus oleh
                              pengajar terbaik dan berpengalaman. Mulai dari nonton video,
                              latihan soal-soal, modul pembelajaran dan cara cepat, serta tryout,
                              semua bisa diakses dari laptop maupun smartphone kamu.
                              Belajar persiapan Ujian Masuk PKN STAN kapanpun dan dimanapun.
                              <strong>#CaraBelajarMasaKini</strong>
        </h2>
      </div>

    </div>
  </div>
</section>


<section id="promotion" class="section section-red">
  <div class="container ">
    <div class="columns has-text-centered">
      <div class="column is-three-fifths is-offset-one-fifth">
        <h1 class="title is-size-5 is-size-6-mobile has-text-white">Dapatkan Gratis Tryout Online TPA, TBI dan SKD dengan Mengundang Temanmu ke Yukbimbel!
        <br><br>Undang Temanmu Melalui Email</h1>

        <div class="field column is-three-fifths is-offset-one-fifth">
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Email">
            <span class="icon is-small is-left">
              <i class="mdi mdi-email mdi-24px"></i>
            </span>
          </p>
        </div>

        <hr style="border: 1px solid #fff;" >

        <h1 class="title is-size-5 is-size-6-mobile has-text-white">Lebih Banyak Cara untuk Mengundang Temanmu</h2>

        <div class="field column is-three-fifths is-offset-one-fifth">
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Email">
            <span class="icon is-small is-left">
              <i class="mdi mdi-email mdi-24px"></i>
            </span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="product-1" class="section is-skewed-sm section-white p-b-100">
  <div class="container is-reverse-skewed-sm">
    <div>
      <div class="columns">
        <div class="column is-6">
          <h1 class="title is-3 has-text-weight-bold">Yukbelajar.</h1>
          <hr style="border:3px solid #000; width:100px;">
          <h2 class="subtitle is-5">
            Belajar Persiapan Ujian Masuk PKN STAN Jadi Mudah!
            Video belajar yang mudah dipahami, latihan soal prediksi, modul pembelajaran,
            modul cara cepat, dan ribuan latihan soal yang siap bantu kamu untuk dapat
            mewujudkan mimpi kamu berkuliah di PKN STAN. <b>#BelajarJadiLuarBiasa</b>
          </h2>
          <a href="#" class="button is-primary is-medium is-success is-rounded">Coba Sekarang</a>
        </div>
        <div class="column is-6">

        </div>
      </div>
    </div>
  </div>
</section>

<section id="product-2" class="section is-skewed-sm section-primary p-b-100">
  <div class="container is-reverse-skewed-sm">
    <div>
      <div class="columns">
        <div class="column is-6">

        </div>
        <div class="column is-6">
          <h1 class="title is-3 has-text-weight-bold has-text-white">Yukbahassoal.</h1>
          <hr style="border:3px solid #fff; width:100px;">
          <h2 class="subtitle is-5 has-text-white">
            Belajar Soal-Soal Ujian Masuk PKN STAN dari Laptop Maupun Smartphone Kamu!
            Ngerjain soal-soal Ujian Masuk PKN STAN nggak perlu bingung lagi.
            Kamu bisa belajar soal-soal Ujian Masuk PKN STAN kapanpun
            dan dimanapun. Kamu juga bisa melihat pembahasan soalnya
            secara lengkap! <b>#BelajarJadiPraktis</b>
          </h2>
          <a href="#" class="button is-primary is-medium is-link is-rounded">Coba Sekarang</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="product-3" class="section is-skewed-sm p-b-100">
  <div class="container is-reverse-skewed-sm">
    <div>
      <div class="columns">
        <div class="column is-6">
          <h1 class="title is-3 has-text-weight-bold">Yuktryout.</h1>
          <hr style="border:3px solid #000; width:100px;">
          <h2 class="subtitle is-5">
            Uji persiapan kamu dalam menghadapi tes tertulis Ujian Masuk PKN STAN
            dengan mengikuti tryout berbasis online. Kamu juga bisa mendapatkan
            pembahasan soalnya serta analisis kemampuanmu dalam mengerjakan
            soal-soal Ujian Masuk PKN STAN.<b>#SiapMasukPKNSTAN</b>
          </h2>
          <a href="#" class="button is-danger is-medium is-link is-rounded">Coba Sekarang</a>
        </div>
        <div class="column is-6">

        </div>
      </div>
    </div>
  </div>
</section>
@endsection
