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
    <!-- CSS Fontawesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/all.css">
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
    <!-- style -->
    <style>
        body {
            background-image: url(<?php echo base_url('assets/img/parallax.jpg') ?>);
            background-size: cover;
            background-attachment: fixed;
            background-position: 0px -50px;
        }
    </style>
    <title>Halaman Error 404</title>
</head>

<body class="bg-info jutify-content-center">

    <div class="container">
        <nav class="nav fixed-top bg-light mb-5 justify-content-center py-1">
            <h5 class="text-danger" style="font-size:14px;"><i class="fas fa-shield-alt"></i> Anda memasuki halaman not found <i class="fas fa-shield-alt"></i></h5>
        </nav>

        <div class="card border-warning mx-auto" style="max-width: 25rem;margin-top:6rem;">
            <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                <strong>Ups something wrong!</strong> Halaman tidak ditemukan gan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-header text-center">ERROR 404 NOT FOUND</div>
            <div class="card-body text-info">
                <h5 class="card-title">Warning Halaman tidak ditemukan</h5>
                <p class="card-text">Silahkan periksa link atau klik link dibawah.</p>
            </div>
        </div>

        <div class="card mt-3 mx-auto" style="max-width: 25rem;background-color:transparent;">
            <div class="card-body mx-auto">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary btn-action" target="_blank" onclick="return window.history.back();"><i class="fas fa-hand-point-left"></i></a>
                    <a class="btn btn-primary btn-action" target="_blank" href="<?= site_url('home/landing'); ?>"><i class="fas fa-hand-point-up"></i></a>
                    <a class="btn btn-primary btn-action" target="_blank" href="<?= site_url('home'); ?>"><i class="fas fa-hand-point-right"></i></a>
                </div>
            </div>
        </div>

        <nav class="nav fixed-bottom bg-light py-1 justify-content-center">
            <h6>Created by Awal Prasetyo 2019</h6>
        </nav>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>

</html>