@extends('layouts.app')

@section('content')

<!-- Hero / Header -->
<section class="hero is-medium is-light is-bold">
  <div class="hero-body">
    <div class="container">
      <div class="columns">

        <div class="column is-6">
            <img src="{{asset('img/logo.svg')}}" width="300" height="200">
          <h1 class="title m-t-20">
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
          <a href="#" class="button is-primary is-medium is-success">Mulai Belajar</a>
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

<section id="about" class="section is-medium">
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
          <p class="control has-icons-left">
            <input class="input" type="email" placeholder="Email">
            <span class="icon is-left">
              <i class="fa fa-envelope fa-lg"></i>
            </span>
          </p>
        </div>

        <hr style="border: 1px solid #fff;" >

        <h1 class="title is-size-5 is-size-6-mobile has-text-white">Lebih Banyak Cara untuk Mengundang Temanmu</h2>

        <div class="field column is-three-fifths is-offset-one-fifth">
          <p class="control has-icons-left">
            <input class="input" type="text" value="Sofyanlabs.tk" id="myInput">
            <span class="icon is-left">
              <i class="fa fa-envelope fa-lg"></i>
            </span>
            <button class="button is-success copyText" onclick="copyText()">Copy Email</button>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section is-skewed-sm section-white p-b-100">
  <div class="container is-reverse-skewed-sm">
    <div class="columns">
      <div class="column is-6">
        <h1 class="title is-3 has-text-weight-bold">Yukbelajar.</h1>
        <hr style="border:2px solid #0a0a0a; width:100px;">
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
</section>

<section class="section is-skewed-sm section-primary p-b-100">
  <div class="container is-reverse-skewed-sm">
    <div class="columns">
      <div class="column is-6">

      </div>
      <div class="column is-6">
        <h1 class="title is-3 has-text-weight-bold has-text-white">Yukbahassoal.</h1>
        <hr style="border:2px solid #fff; width:100px;">
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
</section>

<section class="section is-skewed-sm">
  <div class="container is-reverse-skewed-sm">
    <div class="columns">
      <div class="column is-6">
        <h1 class="title is-3 has-text-weight-bold">Yuktryout.</h1>
        <hr style="border:2px solid #0a0a0a; width:100px;">
        <h2 class="subtitle is-5">
          Uji persiapan kamu dalam menghadapi tes tertulis Ujian Masuk PKN STAN
          dengan mengikuti tryout berbasis online. Kamu juga bisa mendapatkan
          pembahasan soalnya serta analisis kemampuanmu dalam mengerjakan
          soal-soal Ujian Masuk PKN STAN. <b>#SiapMasukPKNSTAN</b>
        </h2>
        <a href="#" class="button is-warning is-medium is-link is-rounded">Coba Sekarang</a>
      </div>
      <div class="column is-6">

      </div>
    </div>
  </div>
</section>

<section class="section section-blue">
  <div class="container">
    <div class="columns has-text-centered ">
      <div class="column is-12 is-mobile">
        <h1 class="title is-size-4 is-size-6-mobile has-text-white">Cek Serunya Belajar Persiapan Ujian Masuk PKN STAN di Yukbimbel! <br>
          Lulus Ujian Masuk PKN STAN, masuk jurusan impian di PKN STAN, dan raih karir impianmu!
        </h1>
        <div class="video-container">
          <iframe width="500" height="678" src="https://www.youtube.com/embed/8cB_L5p5dgw?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <br><br>
        <a href="#" class="button is-danger is-medium is-link is-rounded">Langganan Sekarang</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-feature-grey-accent">
  <div id="subscribe" class="container">
    <div class="columns p-t-20">
      <div class="column is-12">
        <div class="description has-text-centered">
          <h1 class="title is-size-4">
            Pilih Paket Belajarmu Sekarang!
          </h1>
          <h2 class="subtitle">
            Buruan berlangganan untuk coba materi gratisnya.
          </h2>

          <form>
            <label for="favoritefood" class="is-size-5 m-r-10">Pilih Paket :</label>
            <div class="select">
              <select name="favoritefood">
                <option>Biasa</option>
                <option>Premium</option>
                <option>High</option>
              </select>
            </div>
          </form>

        </div>
      </div>
    </div>

      <div class="columns p-t-30 p-b-100">
        <div class="column is-4 is-offset-2 is-offset-1-mobile is-10-mobile">
          <div class="box pricelist">
            <span class="package-name">Paket Bagus</span>
            <span class="package-price">Rp. 985000</span>
            <span class="package-duration">Langganan 18 Bulan</span>
            <ul class="package-list">
              <li>Hingga 2019</li>
              <li>Video Belajar</li>
              <li>Rangkuman Modul Bimbel</li>
              <li>Kuis & Latihan</li>
            </ul>
            <a href="#" class="button is-medium is-danger is-rounded">Berlangganan</a>
          </div>
        </div>

        <div class="column is-4 is-offset-1-mobile is-10-mobile">
          <div class="box pricelist">
            <span class="package-name">Paket Bagus </span>
            <span class="package-price">Rp. 985000</span>
            <span class="package-duration">Langganan 18 Bulan</span>
            <ul class="package-list">
              <li>Hingga 2019</li>
              <li>Video Belajar</li>
              <li>Rangkuman Modul Bimbel</li>
              <li>Kuis & Latihan</li>
            </ul>
            <a href="#" class="button is-medium is-danger is-rounded">Berlangganan</a>
          </div>
        </div>

      </div>
  </div>
</section>

<section class="section section-feature-grey-accent">
  <div id="help" class="container">
    <div class="columns">
      <div class="column is-5 is-offset-1">
        <figure class="image is-1by2">
          <img src="{{asset ('img/cowo-1.svg')}}" alt="Karakter Cowo Yukbimbel Versi 1">
        </figure>
      </div>

      <div class="column is-5">
        <h1 class="title is-3 has-text-weight-bold">Masih Bingung? Kami akan menghubungimu!</h1>
        <hr style="border:3px solid #0a0a0a; width:100px;">

        <form class="" action="" method="post">
          <div class="field">
            <label class="label">Nama</label>
            <div class="control">
              <input class="input" type="text" required>
            </div>
          </div>

          <div class="field">
            <label class="label">Kelas</label>
            <div class="control">
              <div class="select" required>
                <select>
                  <option>Pilih...</option>
                  <option>SD</option>
                  <option>SMP</option>
                  <option>SMA</option>
                </select>
              </div>
            </div>
          </div>

          <div class="field">
            <label class="label">Nomor Handphone</label>
            <div class="control">
              <input class="input" type="text" required>
            </div>
          </div>

          <div class="field">
            <label class="label">Nomor Handphone Orangtua</label>
            <div class="control">
              <input class="input" type="text" required>
            </div>
          </div>

          <div class="field">
            <label class="label">Email</label>
            <div class="control">
              <input class="input" type="email" required>
            </div>
          </div>

          <input type="submit" class="button is-link is-medium is-link is-rounded m-t-20" value="Kirim">
        </form>
      </div>

    </div>
  </div>
</section>

<section class="section section-red">
  <div class="container ">
    <div class="columns has-text-centered">
      <div class="column is-three-fifths is-offset-one-fifth">
        <h1 class="title is-size-3 has-text-white">
          Metode Pembayaran
        </h1>
        <div class="columns">
          <div class="column">
            <figure class="image is-2by1">
              <img src="https://bulma.io/images/placeholders/128x128.png">
            </figure>
          </div>
          <div class="column">
            <figure class="image is-2by1">
              <img src="https://bulma.io/images/placeholders/128x128.png">
            </figure>
          </div>
          <div class="column">
            <figure class="image is-2by1">
              <img src="https://bulma.io/images/placeholders/128x128.png">
            </figure>
          </div>
          <div class="column">
            <figure class="image is-2by1">
              <img src="https://bulma.io/images/placeholders/128x128.png">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
<script>
function copyText() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("Copy");
  alert("Berhasil Tercopy : " + copyText.value);
}
</script>
@endsection
