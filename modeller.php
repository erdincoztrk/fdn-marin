<?php
session_start();
ob_start();
$_SESSION['sayfa'] = 'urunler';
include('head.php');
include('header.php');
?>

<!-- ÜRÜNLER SECTION -->
<section class="team_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Modellerimiz
            </h2>
        </div>
        <div class="column" style="display:ruby;">
            <?php for($i = 1; $i<=5; $i++) {?>
            <div class="col-md-6 col-sm-6 ">
                <a href="model-detay.php">
                <div class="box" style="justify-content: center;">
                    <div class="img-box">
                        <img src="images/magnum-first.jpeg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Magnum
                        </h5>
                        <h6 class="">
                            Detayları Görmek İçin Tıkla
                        </h6>
                    </div>
                </div>
                </a>
            </div>
            <?php } ?>

        </div>
    </div>
</section>

<?php
include('footer.php');
?>
