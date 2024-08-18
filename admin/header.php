<?php include 'islemler/baglan.php';
ob_start();
session_start();
// AYAR ÇEKME
$ayar = $db->prepare("SELECT * FROM ayar where ayar_id = ?");
$ayar->execute([1]);
$ayargetir=$ayar->fetch(PDO::FETCH_ASSOC);

// OTURUM DOĞRULAMA
$oturum = $db->prepare("SELECT * FROM admin where admin_id = ?");
$oturum->execute([$_SESSION['admin_id']]);
$oturumsayi = $oturum->rowCount();
if($oturumsayi == 0){
    Header("Location:index.php?izinsizgiris");
    exit;
}
// ADMİN BİLGİ ÇEKME
$admin = $oturum->fetch(PDO::FETCH_ASSOC);


// SERTİFİKA ÇEKME
$sertifika = $db->prepare("SELECT * FROM sertifika");
$sertifika -> execute();


// HAKKIMDA BİLGİSİ ÇEKME
$hakkimdabilgi = $db->prepare("SELECT * FROM hakkimda where hakkimda_id = ?");
$hakkimdabilgi->execute([1]);


 ?>



<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $ayargetir['ayar_description'] ?>">
    <meta name="author" content="<?php echo $ayargetir['ayar_author'] ?>">
     <meta name="keywords" content="<?php echo $ayargetir['ayar_keyword'] ?>">

    <title><?php echo $ayargetir['ayar_title']." Admin Panel" ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="homepage.php">
                <div class="sidebar-brand-icon ">
                    <i class="fa fa-code" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo strtoupper($ayargetir['ayar_title']) ?> </div>
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
                CV Bilgileri Düzenle
            </div>
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Cv Düzenle</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="yetenekler.php">Yetenek Listele</a>
                        <a class="collapse-item" href="yetenek-ekle.php">Yetenek Ekle</a>
                        <a class="collapse-item" href="sertifikalar.php">Sertifika Listele</a>
                        <a class="collapse-item" href="sertifika-ekle.php">Sertifika Ekle</a>
                        <a class="collapse-item" href="projeler.php">Proje Listele</a>
                        <a class="collapse-item" href="hakkimda.php">Hakkımda</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

              <div class="sidebar-heading">
                Çözümler
            </div>
            <li class="nav-item">
                <a class="nav-link" href="yazilim-dilleri.php">
                    <i class="fas fa-fw fa-code"></i>
                    <span>Yazılım Dilleri</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="solutions.php">
                    <i class="fas fa-fw fa-code"></i>
                    <span>Çözümler</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cozum-ekle.php">
                    <i class="fas fa-fw fa-code"></i>
                    <span>Çözüm Ekle</span></a>
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
                         <a class="collapse-item" href="adres-ayar.php">Adres Ayarları</a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $ayargetir['ayar_author'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <a class="dropdown-item" href="iletisim-ayar.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="islemler/islem.php?logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                               
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->