<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
  <!-- CSS Ku -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/b4.css">
  <!-- CSS Fontawesome -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/all.css">
  <!-- icon shortcut -->
  <!-- icon set -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= base_url(); ?>assets/icon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>assets/icon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>assets/icon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>assets/icon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= base_url(); ?>assets/icon/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= base_url(); ?>assets/icon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= base_url(); ?>assets/icon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= base_url(); ?>assets/icon/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/icon/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/icon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/icon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/icon/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/icon/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
</head>

<body id="utama">
  <!-- navbar -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand scroll" target="_blank" href="<?= site_url() ?>home"><i class="fas fa-user-secret fa-1x"></i> Awal Portfolio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link scroll" href="#Beranda"><i class="fas fa-home"></i> Beranda<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link scroll" href="#Tentang"><i class="fas fa-universal-access"></i> Tentang</a>
          <a class="nav-item nav-link scroll" href="#Portfolio"><i class="fas fa-archive"></i> Portfolio</a>
          <a class="nav-item nav-link scroll" href="#contact"><i class="fas fa-address-book"></i> Kontak</a>
          <a class="btn bg-dark btn-primary" data-toggle="popover" title="Portfolio ke-2" data-content="Portfolio ke-2 saya Web Materialize" data-trigger="hover" data-placement="bottom" href="<?= site_url(); ?>konten/portfolio2" target="_blank">Lainnya</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid mt-0 pt-2 mb-0">
    <div class="container text-center">
      <h2 class="text-white" id="Beranda">Beranda</h2>
      <div class="gambar">
        <img src="<?= base_url(); ?>assets/img/foto.png" class="rounded-circle">
      </div>
      <h1 class="display-4 text-white">Awal Prasetyo</h1>
      <p class="lead text-center text-white font-weight-bold text-monospace"> Matematikawan | Web Design | Web Developer | Programmer </p>
      <hr class="my-4 bg-light">
      <p class="text-white jelas">This is my first Web Design as Simple Portfolio with Bootstrap 4. Kreasi dengan penuh inspirasi dan intuisi juga imajinasi. Keep on Fastabiqul Khoirot sesuai kemampuan masing - masing.</p>
      <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          selengkapnya
        </a>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <p class="font-italic">Seorang matematikawan fresh graduate. Mencari pengalaman dan eksplorasi hal baru. Ingin mengaplikasikan analisa dan matematika terapan di dunia nyata. Mengikuti perkembangan dan kemajuan agar bisa kerja cerdas untuk perusahaan. Sangat suka dengan desain, pengembangan web dan gaming. Penasaran terhadap dunia IT programming.</p>
        </div>
      </div>
    </div>
  </div>
  <!--accordion  -->
  <section id="tentang" class="tentang ">
    <div class="accordion mt-0 pt-0 mb-4" id="accordionExample">
      <div class="container">
        <h2 class="mt-0 pt-2 pb-2 text-center" id="Tentang">Tentang</h2>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Tentang
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <p class="text-justify">Website sederhana ini merupakan karya pertama saya. Desain minimalis agar mudah dinikmati. Perlu sebuah antusias dan proses dalam setiap tahap. Learning by doing dan trial and error merupakan tantangan dalam setiap hal. Website berupa portfolio sederhanana ini saya dedikasikan untuk Allah SWT, keluarga , sahabat, kerabat, masyarakat dan bangsa. Beberapa isi dalam web ini merupakan gambar sederhana dan gambar yang telah diedit menggunakan Adobe Photoshop.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- thumbnail -->
  <section class="portfolio bg-light pb-4" id="portfolio">
    <div class="container">
      <h2 class="pt-2 pb-2 text-center" id="Portfolio">Portfolio</h2>
      <div class="row pb-2">
        <div class="col-sm-4 col-md-4 col-lg-4 mx-auto my-2 d-block">
          <!-- Button trigger modal -->
          <img src="<?= base_url(); ?>assets/img/1.png" alt="gambar 1" class="img-thumbnail img-fluid mx-auto d-block" data-toggle="modal" data-target=".bd-example-modal-lg">
          <!-- Modal -->
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <img src="<?= base_url(); ?>assets/img/11.jpg" alt="gambar 1" class="img-fluid mx-auto d-block">
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 mx-auto my-2 d-block">
          <!-- Button trigger modal -->
          <img src="<?= base_url(); ?>assets/img/21.jpg" alt="gambar 2" class="img-thumbnail img-fluid mx-auto d-block" data-toggle="modal" data-target=".bd1-example-modal-lg">
          <!-- Modal -->
          <div class="modal fade bd1-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <img src="<?= base_url(); ?>assets/img/12.jpg" alt="gambar 2" class="img-fluid mx-auto d-block">
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 mx-auto my-2 d-block">
          <!-- Button trigger modal -->
          <img src="<?= base_url(); ?>assets/img/31.jpg" alt="gambar 3" class="img-thumbnail img-fluid mx-auto d-block" data-toggle="modal" data-target=".bd2-example-modal-lg">
          <!-- Modal -->
          <div class="modal fade bd2-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <img src="<?= base_url(); ?>assets/img/13.jpg" alt="gambar 3" class="img-fluid mx-auto d-block">
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 mx-auto my-2 d-block">
          <!-- Button trigger modal -->
          <img src="<?= base_url(); ?>assets/img/4.jpg" alt="gambar 4" class="img-thumbnail img-fluid mx-auto d-block" data-toggle="modal" data-target=".bd3-example-modal-lg">
          <!-- Modal -->
          <div class="modal fade bd3-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <img src="<?= base_url(); ?>assets/img/14.jpg" alt="gambar 4" class="img-fluid mx-auto d-block">
              </div>
            </div>
          </div>

        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 mx-auto my-2 d-block">
          <!-- Button trigger modal -->
          <img src="<?= base_url(); ?>assets/img/5.jpg" alt="gambar 5" class="img-thumbnail img-fluid mx-auto d-block" data-toggle="modal" data-target=".bd4-example-modal-lg">
          <!-- Modal -->
          <div class="modal fade bd4-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <img src="<?= base_url(); ?>assets/img/15.jpg" alt="gambar 5" class="img-fluid mx-auto d-block">
              </div>
            </div>
          </div>

        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 mx-auto my-2 d-block">
          <!-- Button trigger modal -->
          <img src="<?= base_url(); ?>assets/img/6.jpg" alt="gambar 6" class="img-thumbnail img-fluid mx-auto d-block" data-toggle="modal" data-target=".bd5-example-modal-lg">
          <!-- Modal -->
          <div class="modal fade bd5-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <img src="<?= base_url(); ?>assets/img/16.jpg" alt="gambar 6" class="img-fluid mx-auto d-block">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- carousel -->
  <section class="carousel ">
    <div class="container py-4 mb-4">
      <h2 class="efek text-center">Beberapa Efek Dalam Photoshop</h2>
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url(); ?>assets/img/noise.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Noise Effect</h5>
              <p>Sebuah gambar pemandangan dengan bukit terjal diberikan sedikit effect noise agar keren.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url(); ?>assets/img/water.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Water Effect</h5>
              <p>Mercusuar ditepi laut dengan sentuhan effek brush water canvas membuat stylish.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url(); ?>assets/img/sharp.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Sharpen Effect</h5>
              <p>Foto kebun bunga dengan background replace dengan effect blur background sedikit sentuhan sharpen effect pada kebun bunga</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url(); ?>assets/img/liquify.jpg" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Liquify Effect</h5>
              <p>Bunga yang mekar dengan sentuhan liquify effect menjadi sedikit abstract themes classical romance yang menawan.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url(); ?>assets/img/fieldblur.png" alt="fifth slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Field Blur Effect</h5>
              <p>Pemberian fokus effect blur dan bokeh effect pada bunga dengan lapisan effect field blur.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url(); ?>assets/img/drybrush.jpg" alt="sixth slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Dry Brush Effect</h5>
              <p>Seekor koala dengan pandangan terpesona pada anda sedikit effect dry brush seperti menggambar dalam kanvas.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <section class="text-center bg-light d-flex flex-column bd-highlight media">
    <div class="container">
      <div class="row">
        <div class="col my-3">
          <h3 class="text-white">Sekilas Video Mengenai Saya</h3>
          <video src="<?= base_url(); ?>assets/video/mine.mp4" controls></video>
        </div>
      </div>
    </div>
    <div class="container">
      <marquee class="text-center font-weight-bold text-monospace text-white" width="400">
        .:--- Selamat Menikmati Sajian Dari Kami ---:.
      </marquee>
    </div>
    <div class="container">
      <div class="row">
        <div class="col my-3">
          <h3 class="text-white">Alunan Musik Instrumental</h3>
          <audio src="<?= base_url(); ?>assets/audio/2.mp3" controls>
          </audio>
        </div>
      </div>
    </div>
  </section>
  <!-- card -->
  <section class="contact" id="contact">
    <div class="container">
      <h2 class="pt-2 text-center" id="contact">Contact</h2>
      <div class="row kartu">
        <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
          <div class="card bg-primary">
            <div class="container text-center"><i class="fas fa-address-book fa-3x"></i></div>
            <div class="card-body bg-light kertu">
              <h5 class="card-title">Alamat Lengkap</h5>
              <p class="card-text">
                <p>Dusun Tambak Boyo RT 03 RW 01, Kecamatan Ambarawa, Kabupaten Semarang</p>
              </p>
              <a href="https://maps.google.com/?q=-7.262220,110.417809" class="btn btn-primary" data-toggle="popover" title="Alamat sesuai Google Maps" data-content="https://maps.google.com/?q=-7.262220,110.417809" data-trigger="hover" data-placement="top" href="https://maps.google.com/?q=-7.262220,110.417809" target="_blank">Lihat</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
          <div class="card bg-primary">
            <div class="container text-center"><i class="fab fa-facebook fa-3x"></i></div>
            <div class="card-body bg-light kertu">
              <h5 class="card-title">Facebook</h5>
              <p class="card-text">Anda dapat menghubungi saya melalui media sosial facebook. Mari saling berbagi karena berbagi itu indah.</p>
              <a href="https://www.facebook.com/awal.prasetyo.14" class="btn btn-primary" data-toggle="popover" title="Facebook saya" data-content="https://www.facebook.com/awal.prasetyo.14" data-trigger="hover" data-placement="top" href="https://www.facebook.com/awal.prasetyo.14" target="_blank">Lihat</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 mx-auto pb-3">
          <div class="card bg-primary">
            <div class="container text-center"><i class="fab fa-twitter fa-3x"></i></div>
            <div class="card-body bg-light kertu">
              <h5 class="card-title">Twitter</h5>
              <p class="card-text">Anda dapat menghubungi saya melalui media sosial twitter. Mari saling berbagi sesuai kata hati.</p>
              <a href="https://twitter.com/AwalPras" class="btn btn-primary" data-toggle="popover" title="Twitter saya" data-content="https://twitter.com/AwalPras" data-trigger="hover" data-placement="top" href="https://twitter.com/AwalPras" target="_blank">Lihat</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
          <div class="card bg-primary">
            <div class="container text-center"><i class="fab fa-linkedin fa-3x"></i></div>
            <div class="card-body bg-light kertu">
              <h5 class="card-title">Linkedin</h5>
              <p class="card-text">Anda dapat menghubungi saya melalui media sosial linkedin. Mari saling berbagi ilmu.</p>
              <a href="https://www.linkedin.com/in/awal-prasetyo-174967134/" class="btn btn-primary" data-toggle="popover" title="Linkedin saya" data-content="https://www.linkedin.com/in/awal-prasetyo-174967134/" data-trigger="hover" data-placement="top" href="https://www.linkedin.com/in/awal-prasetyo-174967134/" target="_blank">Lihat</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- quote -->
  <section class="quote bg-light py-2 my-0">
    <div class="container my-0">
      <blockquote class="blockquote text-center my-0">
        <p class="mb-0">Innallaha Maas Shobiriin."Sesungguhnya Allah bersama orang - orang yang sabar."</p>
        <footer class="blockquote-footer">By Awal Prasetyo <cite title="Source Title">Reminder of the day.</cite></footer>
      </blockquote>
    </div>
  </section>
  <!-- footer -->
  <footer class="bg-primary my-auto text-white text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="pt-3">Dipersembahkan oleh Awal Prasetyo &copy Copyright 2018.</p>
        </div>
      </div>
    </div>
  </footer>
  <div class="up text-center my-auto mx-auto clear-fix">
    <a class="atas" href="#utama">
      <i class="fas fa-arrow-circle-up fa-2x text-center">
      </i>
    </a>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/script_1.js"></script>
</body>

</html>