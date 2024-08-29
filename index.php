<?php
ob_start();
session_start();
$_SESSION['sayfa'] = 'index';
include('head.php');
?>
<div class="hero_bg_box" style="flex-direction: column; flex-wrap:nowrap; align-content: center;">
    <div class="img-box" style="margin-bottom:0px;">
        <!-- <img src="images/hero-bg.jpg" alt=""> -->
        <video class="w-100" autoplay muted playsinline>
            <source src="images/tanitim-video.mp4" type="video/mp4">
            Tarayıcınız video etiketini desteklemiyor.
        </video>

    </div>
</div>
<?php include('header.php') ?>
<!-- slider section -->
<section class=" slider_section ">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row" style="d-none">
                        <div class="col-md-7" style="d-none">
                            <div id="logoDetail" class="detail-box">
                                <div id="logo"></div>
                                <h1 style="font-family: 'Beyonders', sans-serif; display:none;">
                                    <label> FDN </label> <br>
                                    <span style="margin-top:1rem;">
                        Marine
                      </span>
                                </h1>
                                <p>
                                    <!--Denizde özgürlüğün adı...-->
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container idicator_container ">
        <ol class="carousel-indicators">

            <a href="https://www.instagram.com/<?= $communication['comm_instagram'] ?>/" target="_blank"
               style="color:inherit; text-decoration: none; margin-right:2%">
                <i class="fa-brands fa-instagram fa-3x" style="
            margin-right:2%;
             transition: background-color 0.3s ease, color 0.3s ease;
}
"></i>
            </a>

            <a href="https://api.whatsapp.com/send?phone=90<?= $communication['comm_tel'] ?>" target="_blank"
               style="color:inherit; text-decoration: none; margin-right:2%;">
                <i class="fa-brands fa-whatsapp fa-3x" style="
            margin-right:2%;
            transition: background-color 0.3s ease, color 0.3s ease;
}
"></i>
            </a>

            <a href="<?= $communication['comm_facebook'] ?>"
               target="_blank" style="color:inherit; text-decoration: none; margin-right:2%">
                <i class="fa-brands fa-facebook fa-3x" style=" transition: background-color 0.3s ease, color 0.3s ease; margin-right:2%;
}"></i>
            </a>

            <a href="https://<?= $communication['comm_sahibinden'] ?>.sahibinden.com/" target="_blank"
               style="color:inherit; text-decoration: none; margin-right:2%;">
                <i class="fa-solid fa-s fa-3x" style=" transition: background-color 0.3s ease, color 0.3s ease; margin-right:2%;
}"></i>
            </a>

        </ol>
    </div>
    </div>
</section>
<!-- end slider section -->
</div>

<!-- about section -->

<section class="about_section layout_padding" id="hakkimizda">
    <div class="container">
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="img_container">
                    <div class="img-box">
                        <img src="images/fdn-marine-Photoroom.png" alt=""/>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <div class="detail-box">
                    <div class="heading_container ">
                        <h2>
                            Biz Kimiz
                        </h2>
                    </div>
                    <p>
                        <?= $aboutus['about_us'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->


<!-- ÖZEL ÜRÜNLER SECTİON -->


<?php $getProduct = $db->getRows("SELECT * FROM tbproduct") ?>
<!-- ÜRÜNLER SECTION -->
<section class="team_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Modellerimiz
            </h2>
        </div>
        <div class="row">
            <?php foreach ($getProduct as $item){
            $getPhoto = $db->getRow("SELECT * FROM tbimages WHERE image_id = {$item['product_id']}")
            ?>
            <a href="model-detay.php?model=<?=$item['product_url']?>&mid=<?=$item['product_id']?>">
                <div class="col-md-6 col-sm-6 mx-auto ">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?= $getPhoto['image_path'] ?>" alt="<?=$getPhoto['image_description']?>">
                        </div>
                        <div class="detail-box">
                            <h5>
                                <?= $item['product_name']; ?>
                            </h5>
                            <h6 class="">
                                Detayları Görmek İçin Tıkla
                            </h6>
                        </div>
                    </div>
                </div>
            </a>
                <?php } ?>
        </div>
        <div class="btn-box">
            <a href="modeller.php">
                Hepsini Gör
            </a>
        </div>
    </div>
</section>


<?php include('footer.php') ?>
<script>
    const video = document.querySelector('video');
    const image = document.createElement('img');
    image.src = 'images/fdn-marine-Photoroom.png'; // Resim yolunu buraya yazın
    logoMove()

    video.addEventListener('ended', () => {
        video.style.display = 'none';
        const div = $(video).closest('div');
        const mainDiv = div[0];
        $(mainDiv).prepend('<img src="images/second-s-photo.jpeg" />')
    });


</script>