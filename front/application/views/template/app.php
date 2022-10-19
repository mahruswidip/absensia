<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SICANTIK - Sistem Catatan Petani Organik</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets'); ?>/img/favicon.png" rel="icon">
    <link href="<?php echo base_url('assets'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets'); ?>/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets'); ?>/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: EstateAgency - v4.6.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="index.html">SI<span class="color-b">CANTIK</span></a>
            <a class="navbar-brand text-brand" href="index.html">I</a>
            <p class="mt-3">Sistem Catatan Petani Organik</p>
            
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#beranda">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="property-grid.html">Pelayanan Kami</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="blog-grid.html">Bersama Kami</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SICANTIK - Sistem Catatan Petani Organik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link href="<?php echo base_url('assets'); ?>/css/fonts/google_fonts.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/bootstrap/datatables.bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/select-datatable.css') ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link href="<?php echo base_url('assets'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/modules/sweetalert2-theme-bootstrap-4/bootstrap-4.css') ?>">
    <link type="text/css" href="<?php echo base_url('assets/loading_page.css'); ?>">

    <link href="<?php echo base_url('assets'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/css/compact-gallery.css" rel="stylesheet">

    <link type="text/css" href="<?php echo base_url('plugins/daterange/daterangepicker.css') ?>">
    <link type="text/css" href="<?php echo base_url('plugins/daterange/bootstrap-timepicker.min.css') ?>">
    <link type="text/css" href="<?php echo base_url('plugins/daterange/components.css') ?>">

    <header id="header">
        <div class="row justify-content-around">
            <div class="col-auto">
                <div class="logo">
                    <a href="<?php echo base_url(''); ?>"><img src="<?php echo base_url('assets'); ?>/img/logo/logocropped.png" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-auto">
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="<?php echo base_url(''); ?>">Beranda</a></li>
                        <li><a href="<?php echo base_url('#about'); ?>">Cari Barang</a></li>
                        <li><a href="<?php echo base_url('index.php/penitip/index'); ?>">Instansi Penitip</a></li>
                        <li><a href="<?php echo base_url('index.php/riwayat/index'); ?>">Pemeliharaan</a></li>
                        <li><a href="<?php echo base_url('index.php/pengambilan/index'); ?>">Pengambilan</a></li>
                        <li><a href="https://survei.balitbangham.go.id/layanan/cfd3f3fa-c227-11eb-ab0d-323234393431/3ff48bda-4b87-11eb-a51f-323334333033/3e9dbc9e-b776-11e9-b8b2-313834333239/32cee598-e65e-11e9-a596-313131393436">Survey</a></li>
                        <li><a href="<?php echo base_url(''); ?>">Hubungi Kami</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</head> -->

<body>
    {CONTENT}
</body>