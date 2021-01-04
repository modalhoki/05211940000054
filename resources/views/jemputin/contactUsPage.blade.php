@extends('jemputin.tema')

<?php $page = "Contact Us" ?>

<main id="main">

@include('jemputin.tree')

@section('konten')

<style type="text/css">
    .bunder {
      text-align: center;
    }

    .bunder a {
      font-size: 3vw;
      display: inline-block;
      background: #E56234;
      color: #fff;
      padding: 8px 0;
      margin: 1vw;
      border-radius: 50%;
      text-align: center;
      width: 5vw;
      height: 5vw;
      transition: 0.3s;
    }

    .bunder a:hover {
      background: #27282c;
      color: #fff;
      text-decoration: none;
    }
</style>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Apabila anda menemui masalah atau ingin memberikan saran atau hanya sekedar curhat, anda dapat menghubungi
        beberapa kontak dibawah</p>
    </div>

    <div class="bunder mb-3">
      <a href="#" class="twitter center"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>

    <div class="row">

      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-6 info" data-aos="fade-up">
            <i class="bx bx-map"></i>
            <h4>Address</h4>
            <p>MH Thamrin Street,<br>Surabaya, East aja</p>
          </div>
          <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-phone"></i>
            <h4>Call Us</h4>
            <p>+62 821 0291 2839 <br>+62 112 8938 1028</p>
          </div>
          <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-envelope"></i>
            <h4>Email Us</h4>
            <p>Call@jemput.in<br>Help@jemput.in</p>
          </div>
          <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-time-five"></i>
            <h4>Working Hours</h4>
            <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
          <div class="form-group">
            <input placeholder="Your Name" type="text" name="name" class="form-control" id="name"
              data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input placeholder="Your Email" type="email" class="form-control" name="email" id="email"
              data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject"
              data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea placeholder="Message" class="form-control" name="message" rows="5" data-rule="required"
              data-msg="Please write something for us"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->