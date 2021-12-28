<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wonderpaint - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/js/html2canvas.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <style>
    .hero {
        position: relative;
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero::before {
        content: "";
        background-image: url('<?= base_url()?>assets/img/bg-wp.png');
        background-size: cover;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        opacity: 0.4;
    }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-light sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="margin-bottom:100px"
                href="index.html">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
                <div class="sidebar-brand-icon" style="margin-top:90px">
                    <img src="<?= base_url()?>assets/img/logo.png" alt="Logo" style="width:80%" />
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active text-primary">
                <a class="nav-link text-primary" href="<?= base_url()?>">
                    <i class="fas fa-fw fa-tachometer-alt text-primary"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active ">
                <a class="nav-link text-primary" href="<?= base_url()?>penjualan">
                    <i class="fas fa-shopping-basket text-primary"></i>
                    <span>Data Penjualan</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed text-primary" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-table text-primary"></i>
                    <span>Data Persediaan</span>
                    <i class="fas fa-angle-down text-primary ml-4"></i>
                </a>
                <div id="collapseTwo" class="collapse text-primary" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded ">
                        <a class="collapse-item text-primary" href="<?= base_url()?>persediaan/datamasuk">Data Masuk</a>
                        <a class="collapse-item text-primary" href="<?= base_url()?>persediaan/datakeluar">Data
                            Keluar</a>
                        <a class="collapse-item text-primary" href="<?= base_url()?>persediaan">Data Persediaan</a>
                    </div>
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link text-primary" href="<?= base_url()?>pelanggan">
                    <i class="fas fa-users text-primary"></i>
                    <span>Data Pelanggan</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link text-primary" href="<?= base_url()?>distributor">
                    <i class="fas fa-cart-plus text-primary"></i>
                    <span>Distributor</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link text-primary" href="<?= base_url()?>registrasi">
                    <i class="fas fa-user text-primary"></i>
                    <span>Pengguna</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle d-flex flex-column-reverse gap-2" href="#"
                                id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span
                                    class="mt-1 mb-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('nama_account')?></span>
                                <i class="fas fa-user text-primary"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url()?>logout" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->