<?php
session_start();
ob_start();
$_SESSION['sayfa'] = 'urunler';
include('head.php');
include('header.php');
$getModels = $db->getRows("SELECT * FROM tbproduct ORDER BY product_id ASC");
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
            <?php
            foreach($getModels as $item) {
                $getPhoto = $db->getRow("SELECT * FROM tbimages WHERE image_productid = ".$item['product_id']);

                ?>
            <div class="col-md-6 col-sm-6 ">
                <a href="model-detay.php?model=<?=$item['product_url']?>&mid=<?=$item['product_id']?>">
                <div class="box" style="justify-content: center;">
                    <div class="img-box">
                        <img src="<?=$getPhoto['image_path']?>" alt="<?=$getPhoto['image_description']?>">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <?=$item['product_name'] . ' ' . $item['product_model']?>
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
