<?php
session_start();
ob_start();
include 'islemler/baglan.php';
$db = new dbConnection();
if ($_SESSION['user'] && $_SESSION['id']) {
    $id = $_SESSION['id'];
    $user = $_SESSION['user'];
    $admin = $db->getRow("SELECT * FROM tbadmin WHERE admin_username = '{$user}' AND admin_id = '{$id}'");
    if(!$admin){
        ?>
        <script>alert('İzinsiz giriş yapılamaz!');</script>
        <?php
        header('Locatin:index.php');
        session_destroy();
    }
}
else{
    ?>
    <script>alert('İzinsiz giriş yapılamaz!');</script>
    <?php
    header('Location:index.php');
}
?>


<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="app.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div id="loader-container">
    <div id="loader"></div>
</div>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="homepage.php">
            <div class="sidebar-brand-icon ">
                <img src="../images/fdn-marine-Photoroom-beyaz.png" style="width:100px;">
            </div>
            <div class="sidebar-brand-text mx-3"></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <div class="sidebar-heading">
            Mesaj İşlemleri
        </div>
        <li class="nav-item">
            <a class="nav-link" href="mesajlar.php">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Mesajlar</span></a>
        </li>
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Modeller
        </div>
        <li class="nav-item">
            <a class="nav-link" href="model-listele.php">
                <i class="fa fa-ship"></i>
                <span>Model Listele</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="model-ekle.php">
                <i class="fa fa-ship"></i>
                <span>Model Ekle</span></a>
        </li>


        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Genel Ayarlar
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Ayarlar</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item" href="site-ayar.php">Site Ayarları</a>
                    <a class="collapse-item" href="iletisim-ayar.php">İletişim Ayarları</a>
                    <a class="collapse-item" href="hakkimda.php">Hakkımızda Ayarları</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <h4 id="#admintext" style="font-family: 'Beyonders', sans-serif; font-style:italic;">FDN ADMIN</h4>
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                            <img class="img-profile rounded-circle"
                                 src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item d-none" href="profil.php">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profil
                            </a>
                            <a class="dropdown-item d-none" href="iletisim-ayar.php">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" style="cursor: pointer;" onclick="adminLogout()">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>

                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->