@extends('layouts.app')

@section('content')

<!-- Hero / Header -->
<section class="hero is-medium is-success is-bold">
  <div class="hero-body">
    <div class="container">
      <div class="columns">

        <div class="column is-6 m-t-30">
          <h1 class="title">
            Belajar Persiapan Ujian Masuk PKN STAN dengan
            Materi yang Lengkap, dan Pengajarnya Ahli di Bidangnya! #BelajarJadiLuarBiasa
          </h1>
          <h2 class="subtitle m-t-10">
            Video belajar yang mudah dipahami, soal-soal ujian tahun-tahun sebelumnya
            dan kisi-kisi terbaru soal-soal Ujian Masuk PKN STAN disertai
            dengan pembahasan yang lengkap. Pengajarnya menyenangkan dan
            penjelasan materinya mudah dipahami.
          </h2>
          <a href="#" class="button is-primary is-large is-primary">Mulai Belajar</a>
        </div>

        <div class="column is-6">
          <figure class="image is-3by2">
            <img src="{{asset ('img/cowo-2.svg')}}" alt="Karakter Wanita Yukbimbel Versi 1">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-white">
  <div class="container ">
    <div class="columns has-text-centered">
      <div class="column is-fifths-fifths">
        <h1 class="title is-size-4 is-size-6-mobile">
          Semakin Paham Materi Ujian Masuk PKN STAN di Yukbelajar! <br>
          <hr width="100px" style="border:2px solid #0a0a0a; margin-left:45%">
          Udah nggak jaman les di bimbel.<br> Yukbelajar lebih murah, mudah, dan nyaman.
        </h1>
      </div>
    </div>
  </div>
</section>

<section class="section section-white is-first">
  <div class="container">
    <div class="columns">
      <div class="column is-6">
        <span class="icon is-large has-text-primary p-l-30 m-b-20">
          <i class="fa fa-image fa-4x"></i>
        </span>
        <h1 class="title is-3 has-text-weight-bold">1. Video Belajar</h1>
        <hr style="border:2px solid #0a0a0a; width:100px;">
        <h2 class="subtitle is-5">
          Tonton video belajar yang lengkap dan mudah dipahami
          disertai dengan animasi yang menarik, serta pembahasan
          soal-soal Ujian Masuk PKN STAN bersama
          pengajar terbaik dan berpengalaman.
        </h2>
      </div>
      <div class="column is-6">

      </div>
    </div>
  </div>
</section>

<section class="section is-skewed-sm section-red p-b-100">
  <div class="container is-reverse-skewed-sm">
    <div class="columns">
      <div class="column is-6">

      </div>
      <div class="column is-6">
        <h1 class="title is-3 has-text-weight-bold has-text-white">2. Soal Prediksi dan Pembahasan</h1>
        <hr style="border:2px solid #fff; width:100px;">
        <h2 class="subtitle is-5 has-text-white">
          Pertajam pemahamanmu lewat lebih dari ribuan soal prediksi dan pembahasan.
          Jawaban langsung keluar beserta pembahasannya.
        </h2>
      </div>
    </div>
  </div>
</section>

<section class="section is-skewed-sm">
  <div class="container is-reverse-skewed-sm">
    <div class="columns">
      <div class="column is-6">
        <h1 class="title is-3 has-text-weight-bold">3. Unduh Modul dan Cara Cepat.</h1>
        <hr style="border:2px solid #0a0a0a; width:100px;">
        <h2 class="subtitle is-5">
          Setelah menonton video pembelajaran dan mengerjakan soal prediksi, kamu dapat mengunduh
          modul rangkuman materi dan modul cara cepat, yang dapat kamu gunakan untuk belajar kapan saja dan dimana saja.
        </h2>
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
@endsection
