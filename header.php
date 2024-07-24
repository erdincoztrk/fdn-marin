<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="shortcut icon" href="images/fdn-marine-Photoroom-beyaz.png" type="image/x-icon">
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">

    <title>FDN Marine</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap"
          rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet"/>
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->


    <header class="header_section">
        <div class="header_bottom" style="background-image:url('<?=$_SESSION['sayfa'] && $_SESSION['sayfa'] != 'index' ? 'images/img_1.png' :''  ?>')">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.php">
              <span>
                <img src="images/fdn-marine-Photoroom-beyaz.png" style="width:180px;">
              </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""></span>
                    </button>

                    <div class="collapse navbar-collapse ml-auto" style="margin-top:0;" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Anasayfa <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="cursor: pointer;" onclick="hakkimizdaGit()"> Hakkımızda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="modeller.php"> Modellerimiz </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="iletisim.php">İletişim</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- end header section -->