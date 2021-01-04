@extends('jemputin.tema')

<?php $page = "Product"?>

<main id="main">

@include('jemputin.tree')


@section('konten')

    <div class="container">
      <div class="row featurette" style="margin:100px auto" data-aos="fade-up">
        <div class="col-md-7">
          <h2 class="featurette-heading">Mo-tor. </h2>
          <p class="lead">Kemana aja tanpa membuat kantong menjadi tipis.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Mo-tor" style="width: 300px; height: 300px;" src="assets/img/Mo-tor.svg" data-holder-rendered="true">
        </div>
      </div>

      <div class="row featurette" style="margin:100px auto" data-aos="fade-up">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Mo-bil</h2>
          <p class="lead">Bepergian aman, nyaman, dan membuat dompet tetap tenang.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Ma-kan" src="assets/img/Mo-bil.svg" data-holder-rendered="true" style="width: 300px; height: 300px;">
        </div>
      </div>

      <div class="row featurette" style="margin:100px auto" data-aos="fade-up">
        <div class="col-md-7">
          <h2 class="featurette-heading">Ma-kan</h2>
          <p class="lead">Murah, meriah, muntah(karena kekenyangan)</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="assets/img/Ma-kan.svg" data-holder-rendered="true" style="width: 300px; height: 300px;">
        </div>
      </div>
    </div>

    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Ini kata mereka</h2>
          <p>Ini kata mereka yang sudah pake Jemput.in</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Pelajar &amp; Mahasiswa</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               Karena jemputin udah ada di mana mana, saya pun mau pergi ke kampus, pengajian, kosan, bahkan pesen makan di warung bisa lewat satu aplikasi
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Mau beli barang apapun cepet, tinggal dianter aja. Drivernya juga baik. saya jadi suka naik ini
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                KEREN POLLL... 100 BUAT DEVELOPERNYA
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                mantapppP!!!!!!!!!!!!!!!!!!!!!!!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Driver</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Alhamdulillah! Saya sekarang sudah tidak nganggur.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
  
    <main id="main">
  @endsection