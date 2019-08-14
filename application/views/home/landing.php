<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">

	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/all.css">

	<!-- styleku -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style_landing.css">

	<!-- icon set -->
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= base_url() ?>assets/icon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>assets/icon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>assets/icon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>assets/icon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= base_url() ?>assets/icon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= base_url() ?>assets/icon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= base_url() ?>assets/icon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= base_url() ?>assets/icon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/icon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/icon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/icon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/icon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/icon/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;" />
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

	<title>Halaman Utama</title>
</head>

<body class="bg-secondary">
	<section class="mr-0 ml-0 pr-0 pl-0" style="width: 100% !important;height: 100% !important;">
		<!-- awal navbar -->
		<nav class="navbar navbar-dark bg-primary justify-content-center my-0">
			<a class="navbar-brand" href="<?= site_url() ?>home" target="_blank">
				<i class="fa fa-home fa-2x"></i> Awal Berbagi
			</a>
		</nav>
		<!-- akhir navbar -->

		<!-- awal jumbotron -->
		<div class="jumbotron text-center mb-0">
			<h1 class="display-4">Selamat Datang</h1>
			<p class="lead">Terima kasih telah berkenan mengunjungi website saya ini semoga bermanfaat dan berkah.</p>
			<hr class="my-4 bg-dark">
			<p>Website ini saya dedikasikan sebagai portfolio </p>

			<!-- awal modal -->
			<!-- Button trigger modal -->
			<a class="btn btn-primary text-light btn-lg" data-toggle="modal" data-target="#modals" role="button">My Resume</a>

			<!-- Modal -->
			<div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Awal's Resume</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="<?= base_url() ?>assets/img/resume.jpg" alt="" class="img-fluid">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- akhir modal -->
		</div>
		<!-- akhir jumbotron -->

		<!-- permulaan carousel -->
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100 img-fluid img-card-top" src="<?= base_url() ?>assets/img/b4.jpg" alt="First slide">
					<div class="card-header bg-secondary text-white text-center">
						Created on April 2018
					</div>
					<div class="card text-center">
						<div class="card-body bg-dark text-white">
							<h5 class="card-title">Portfolio 1</h5>
							<p class="card-text">Landing page dengan Bootstrap 4 css framework</p>
							<a href="<?= site_url(); ?>konten/portfolio1" target="_blank" class="btn btn-primary mb-4">More Details</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 img-fluid img-card-top" src="<?= base_url() ?>assets/img/mat.jpg" alt="First slide">
					<div class="card-header bg-secondary text-white text-center">
						Created on April 2018
					</div>
					<div class="card text-center">
						<div class="card-body bg-dark text-white">
							<h5 class="card-title">Portfolio 2</h5>
							<p class="card-text">Landing page dengan Materialize css framework</p>
							<a href="<?= site_url(); ?>konten/portfolio2" target="_blank" class="btn btn-primary mb-4">More Details</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 img-fluid img-card-top" src="<?= base_url() ?>assets/img/sip.jpg" alt="First slide">
					<div class="card-header bg-secondary text-white text-center">
						Created on August 2018
					</div>
					<div class="card text-center">
						<div class="card-body bg-dark text-white">
							<h5 class="card-title">Portfolio 3</h5>
							<p class="card-text">Sistem Informasi Perpustakaan denga PHP Native</p>
							<a href="<?= site_url(); ?>auth/daftar" target="_blank" class="btn btn-primary mb-4">More Details</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 img-fluid img-card-top" src="<?= base_url() ?>assets/img/simrs.jpg" alt="First slide">
					<div class="card-header bg-secondary text-white text-center">
						Created on April 2019
					</div>
					<div class="card text-center">
						<div class="card-body bg-dark text-white">
							<h5 class="card-title">Portfolio 4</h5>
							<p class="card-text">Sistem Informasi Rumah Sakit dengan PHP Native</p>
							<a href="https://awalberbagi.000webhostapp.com" target="_blank" class="btn btn-primary mb-4">More Details</a>
						</div>
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
		<!-- akhir carousel -->

		<!-- awal footer -->
		<!-- animated fadeIn delay-4s py-2 -->
		<footer class="bg-primary">
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a class="nav-link text-light" href="https://www.facebook.com/awal.prasetyo.14" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="https://twitter.com/AwalPras" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="https://www.linkedin.com/in/awal-prasetyo-174967134/" target="_blank"><i class="fab fa-linkedin"></i> Linkedin</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="https://www.instagram.com/awalprasetyo4" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
				</li>
			</ul>
		</footer>
		<!-- akhir footer -->
	</section>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

</html>