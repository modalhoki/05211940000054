@extends('jemputin.tema')

<?php $page = "About Us" ?>

<main id="main">
@include('jemputin.tree')

@section('konten')

<section class="inner-page">
  <div class="container">
    <div class="row featurette" style="margin:100px auto" data-aos="fade-up">
        <div class="col-md-7" >
        <!-- Sumber text : gojek.com -->
          <h2 class="featurette-heading">Peran Jemput.in untuk <span class="text-danger">Indonesia</span></h2>
          <p style="font-size: 18px;">Riset oleh Lembaga Demografi Fakultas Ekonomi & Bisnis, Universitas Indonesia, tahun 2018, melibatkan 6.732 responden di 9 kota di Indonesia.</p>
          <h5>Memberikan Dampak Ekonomi Untuk Indonesia</h5>
          <p style="font-size: 18px;">Jemput.in menyumbang sekitar Rp44,2 triliun (US $ 3 miliar) bagi perekonomian Indonesia pada akhir 2018 *.</p>
          <h5>Membantu Anggota Di Ekosistem Kami Mitra driver</h5>
          <p style="font-size: 18px;">Sejak bergabung dengan ojek, hidup mitra driver meningkat - 100%. Mitra driver kami percaya bahwa dengan skema insentif dan kebijakan yang diterapkan Gojek, mereka dapat menyejahterakan keluarga mereka. Sebagian besar dari mereka mengklaim bahwa mereka sekarang dapat menyekolahkan anaknya.</p>
        </div>

        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto"  style="width: 500px; height: 500px;" src="assets/img/AboutUs-1.jpg" data-holder-rendered="true">
        </div>
      </div>

      <div class="row featurette" style="margin:100px auto;" data-aos="fade-up">
        <div class="col-md-7 order-md-2" data-aos="fade-up">
          <h2 class="featurette-heading">2 tahun tumbuh bersama, <span class="text-warning">Jemput</span> kebaikan</h2>
          <p class="lead">Selama 2 tahun jemput.in telah membantu 1237 Pelajar dan 783 UMKM di seluruh indonesia untuk meraih mimpinya. Jemput.in juga membuka Dapur umum yang menyediakan 2700 porsi setiap harinya untuk kaum dhuafa di 9 kota di Indonesia</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="assets/img/AboutUs-2.jpg" data-holder-rendered="true" style="width: 500px; height: 500px;">
        </div>
      </div>
  </div>
</section>

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <center><h2 style="margin-bottom: 40px;">Di balik Jemput.in</h2></center>
  <div class="row" style="margin-bottom: 100px;">
    <div class="col-lg-4" data-aos="fade-up">
      <center>
      <img class="rounded-circle" src="assets/img/AboutUs-Asad.jpg" style="margin-bottom: 20px;" alt="Generic placeholder image" width="140" height="140">
        <h3>M. Asad Al Balad</h3>
      <p>Halo semuanya, Nama saya Asad. NRP saya 05211940000019. Saya dari kelas PWEB C.</p>
      </center>
      
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4" data-aos="fade-up">
      <center>
        <img class="rounded-circle" src="assets/img/AboutUs-Aria.jpeg" style="margin-bottom: 20px;" alt="Generic placeholder image" width="140" height="140">
      <h3>Ariasatya Mahatma</h3>
      <p>Halo semuanya, Nama saya Aria. NRP saya 0521194000054. Saya dari kelas PWEB C.</p>
      </center>
    </div><!-- /.col-lg-4 -->

  <div class="col-lg-4" data-aos="fade-up">
    <center>
      <img class="rounded-circle" src="assets/img/AboutUs-Wahib.PNG" style="margin-bottom: 20px;" alt="Generic placeholder image" width="140" height="140">
    <h3>Wahib Muhibi Nur</h3>
    <p> Halo semuanya. Namaku Wahib. NRP saya 05211940000059. Saya dari kelas PWEB C.
        </center>
  </div><!-- /.row -->


</div>

</main><!-- End #main -->


@endsection