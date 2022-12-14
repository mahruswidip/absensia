<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url('assets/'); ?>img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo site_url('assets/'); ?>img/favicon.png">
    <title>
        SICANTIK
    </title>
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css'); ?>">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?php echo site_url('assets/'); ?>css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?php echo site_url('assets/'); ?>css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo site_url('assets/'); ?>css/material-dashboard.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <img src="<?php echo site_url('assets/'); ?>img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">SICANTIK</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="<?php echo site_url('dashboard/index'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo site_url('petani/index'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Petani</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo site_url('komoditas/index'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Komoditas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo site_url('luasan/index'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                        </div>
                        <span class="nav-link-text ms-1">Luasan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo site_url('tanam/index'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                        </div>
                        <span class="nav-link-text ms-1">Tanam</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo site_url('panen/index'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">notifications</i>
                        </div>
                        <span class="nav-link-text ms-1">Panen</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo site_url('jurnal_kegiatan/index'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Jurnal Kegiatan</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
            </div>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Content Wrapper. Contains page content -->
        <div class="container-fluid py-4">
            <!-- Main content -->
            <section class="content">
                <?php
                if (isset($_view) && $_view)
                    $this->load->view($_view);
                ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </main>
    <script src="<?php echo site_url('assets/'); ?>js/core/popper.min.js"></script>
    <script src="<?php echo site_url('assets/'); ?>js/core/bootstrap.min.js"></script>
    <script src="<?php echo site_url('assets/'); ?>js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php echo site_url('assets/'); ?>js/plugins/smooth-scrollbar.min.js"></script>
    <script src="<?php echo site_url('assets/'); ?>js/plugins/chartjs.min.js"></script>
    <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js'); ?>"></script>
</body>

</html>