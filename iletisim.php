<?php
session_start();
ob_start();
$_SESSION['sayfa'] = 'iletisim';
include('head.php');
include('header.php');
?>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="img_container">
                        <div class="img-box">
                            <iframe src="<?=$communication['comm_googlemap']?>"
                                    width="640" height="480"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="detail-box">
                        <div class="heading_container ">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <a href="https://www.instagram.com/<?= $communication['comm_instagram'] ?>/ target="_blank"
                                           style="color:inherit; background-color:inherit; border:inherit; text-decoration: none; margin-right:2%">
                                            <i class="fa-brands fa-instagram fa-3x" style="
            margin-right:2%;
             transition: background-color 0.3s ease, color 0.3s ease;
}
"></i>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="https://api.whatsapp.com/send?phone=<?=$communication['comm_tel']?>>" target="_blank"
                                           style="color:inherit; background-color:inherit; border:inherit; text-decoration: none; margin-right:2%">
                                            <i class="fa-brands fa-whatsapp fa-3x" style="
            margin-right:2%;
            transition: background-color 0.3s ease, color 0.3s ease;
}
"></i>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="<?= $communication['comm_facebook'] ?>"
                                           target="_blank"
                                           style="color:inherit; background-color:inherit; border:inherit; text-decoration: none; margin-right:2%">
                                            <i class="fa-brands fa-facebook fa-3x" style=" transition: background-color 0.3s ease, color 0.3s ease; margin-right:2%;
}"></i>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="https://<?=$communication['comm_sahibinden']?>.sahibinden.com/" target="_blank"
                                           style="color:inherit; background-color:inherit; border:inherit; text-decoration: none; margin-right:2%">
                                            <i class="fa-solid fa-s fa-3x" style=" transition: background-color 0.3s ease, color 0.3s ease; margin-right:2%;
}"></i>
                                        </a>
                                    </th>
                                </tr>
                                </thead>
                            </table>
                            <div class="info_form ">
                                <h5>
                                    Mesaj bırakın
                                </h5>
                                <form id="message">
                                    <div class="form-row mb-05">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Ad" name="name"
                                                   style="margin-top:2%;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="soyad" name="surname"
                                                   style="margin-top:2%;">
                                        </div>
                                        <div class="col-md-6" style="margin-top:2%;">
                                            <input type="text" class="form-control" placeholder="Mail" name="mail">
                                        </div>
                                        <div class="col-md-6" style="margin-top:2%;">
                                            <input type="text" class="form-control" placeholder="Telefon" name="phone">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="5" placeholder="Mesajınız..." name="detail"
                                                      style="margin-top:2%;"></textarea>
                                        </div>
                                    </div>

                                    <a type="button" onclick="sendMessage($('#message'), 'message')"  style="margin-top:2%;">
                                        Gönder
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal -->
    </section>


    <script>
        document.getElementById('showPhotoBtn').addEventListener('click', function () {
            document.getElementById('photoOverlay').style.display = 'flex';
        });
        document.getElementById('closeOverlay').addEventListener('click', function () {
            document.getElementById('photoOverlay').style.display = 'none';
        });


    </script>


<?php include('footer.php') ?>