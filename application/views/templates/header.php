<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- meta icon -->
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <!-- data tables -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dataTables.bootstrap4.min.css">
    <!-- myCSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <!-- icon -->
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
    <!-- sweetalert.js -->
    <script src="<?= base_url(); ?>assets/js/sweetalert2.all.js"></script>

    <title>Sistem Informasi Perpustakaan</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <span class="navbar-brand h1 mx-auto">Sistem Informasi Perpustakaan</span>
    </nav>

    <!-- card -->
    <div class="container pt-5 pb-5 mt-5 mb-5">
        <div class="card mx-auto shadow" style="border-radius: 20px;">
            <div class="card-header text-center">
                <?= ucfirst($this->uri->segment(1)); ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-3 pb-3">
                        <div class="btn-group-vertical btn-block">
                            <a href="<?= site_url(); ?>beranda" class="btn border-bottom <?= ($this->uri->segment(1) == 'beranda') ? 'btn-primary' : '' ?>">Beranda</a>
                            <a href="<?= site_url(); ?>anggota/data" class="btn border-bottom <?= ($this->uri->segment(1) == 'anggota') ? 'btn-primary' : '' ?>">Anggota</a>
                            <a href="<?= site_url(); ?>buku/data" class="btn border-bottom <?= ($this->uri->segment(1) == 'buku') ? 'btn-primary' : '' ?>">Buku</a>
                            <a href="<?= site_url(); ?>kategori/data" class="btn border-bottom <?= ($this->uri->segment(1) == 'kategori') ? 'btn-primary' : '' ?>">Kategori</a>
                            <a href="<?= site_url(); ?>peminjaman/data" class="btn border-bottom <?= ($this->uri->segment(1) == 'peminjaman') ? 'btn-primary' : '' ?>">Peminjaman</a>
                            <a href="<?= site_url(); ?>pengembalian/data" class="btn border-bottom <?= ($this->uri->segment(1) == 'pengembalian') ? 'btn-primary' : '' ?>">Pengembalian</a>
                            <a href="<?= site_url(); ?>auth/keluar" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger" id="keluar">keluar</a>
                        </div>
                    </div>