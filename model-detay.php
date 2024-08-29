<?php
session_start();
ob_start();
$_SESSION['sayfa'] = 'detay';
include('head.php');
include('header.php');
$getProduct = $db->getRow("SELECT * FROM tbproduct WHERE product_id =" . $_GET['mid']);
$getFirstPhoto = $db->getRow("SELECT * FROM tbimages WHERE image_productid = " . $_GET['mid'] . " ORDER BY image_id ASC ");
$getPhotos = $db->getRows("SELECT * FROM tbimages WHERE image_productid = " . $_GET['mid'] . " ORDER BY image_id ASC ");
$features = [
    "Model" => $getProduct['product_model'],
    "Tekne Tipi" => $getProduct['product_type'],
    "Üretim Modülü" => $getProduct['product_productionModule'],
    "Tasarım Kategorisi" => $getProduct['product_designCategory'],
    "Tekne Genişliği" => $getProduct['product_width'],
    "Tekne Boyu" => $getProduct['product_size'],
    "Tekne Dış Yüksekliği" => $getProduct['product_externalHeight'],
    "Tekne İç Yüksekliği" => $getProduct['product_interiorHeight'],
    "Boş Ağırlık" => $getProduct['product_weight'],
    "Önerilen Motor" => $getProduct['product_recommendedEngine']
];
?>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="<?= $getFirstPhoto['image_path'] ?>" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="detail-box">
                        <div class="heading_container ">
                            <h2>
                                <?= $getProduct['product_name'] . ' ' . $getProduct['product_model'] ?>
                            </h2>
                        </div>
                        <?php
                        foreach ($features as $key => $feature) {
                            if ($feature) {
                                ?>
                                <p>
                                    <b><?= $key ?></b>
                                    <span>: <?= $feature ?></span>
                                </p>
                                <?php
                            }
                        }
                        ?>
                        <div class="btn-box">
                            <a type="button" id="showPhotoBtn" onclick="void(0);">
                                Fotoğraflar
                            </a> <a type="button" data-toggle="modal" data-target="#exampleModal" href="#">
                                Detaylar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Magnum</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="display:ruby; position:relative">
                        <div class="col-md-6 px-0 ">
                            <div>
                                <?= $getProduct['product_detail'] ?>
                            </div>
                        </div>
                        <hr class="mb-05">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1050;
        }

        .overlay .carousel-item img {
            display: block;
            margin: auto;
            max-height: 80vh;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.6);
            border: none;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 20px;
            color: #000;
        }
    </style>


    <!-- Overlay -->
    <div id="photoOverlay" class="overlay">
        <button class="close-btn" id="closeOverlay">&times;</button>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?=$getFirstPhoto['image_path']?>" class="d-block w-100" alt="<?=$image['image_description']?>">
                </div>
                <?php foreach ($getPhotos as $image){ ?>
                <div class="carousel-item">
                    <img src="<?=$image['image_path']?>" class="d-block w-100" alt="<?=$image['image_description']?>">
                </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <script>
        document.getElementById('showPhotoBtn').addEventListener('click', function () {
            document.getElementById('photoOverlay').style.display = 'flex';
        });
        document.getElementById('closeOverlay').addEventListener('click', function () {
            document.getElementById('photoOverlay').style.display = 'none';
        });


    </script>


<?php include('footer.php') ?>