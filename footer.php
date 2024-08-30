<!-- end contact section -->
</div>
<!-- info section -->
<section class="info_section ">
    <div class="container">
        <div class="row">


            <div class="col-md-6">
                <div class="info_info">
                    <h5>
                        İletişim
                    </h5>
                </div>
                <div class="info_contact">
                    <a href="" class="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                            <?=$communication['comm_adress'] . '/' . $communication['comm_distinct'] . '/' . $communication['comm_city']?>
                                          </span>
                    </a>
                    <a href="tel:<?=$communication['comm_tel']?>" class="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                Telefon : +90 536 713 40 89
              </span>
                    </a>
                    <a href="mailto:<?=$communication['comm_mail']?>" class="" >
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                <?=$communication['comm_mail']?>
              </span>
                    </a>
                    <div class="social_box d-none">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info_form ">
                    <h5>
                        Mesaj bırakın
                    </h5>
                    <form id="message">
                        <div class="form-row mb-05">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Ad">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="surname" placeholder="soyad" style="margin-top:2%;">
                            </div>
                            <div class="col-md-6" style="margin-top:2%;">
                                <input type="text" class="form-control" name="mail" placeholder="Mail">
                            </div>
                            <div class="col-md-6" style="margin-top:2%;">
                                <input type="text" class="form-control" name="phone" placeholder="Telefon">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="5" name="detail" id="detail" placeholder="Mesajınız..."
                                          style="margin-top:2%;"></textarea>
                            </div>
                        </div>

                        <button type="button" onclick="sendMessage($('#message'), 'message')">
                            Gönder
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end info_section -->


<!-- footer section -->
<footer class="container-fluid footer_section">
    <p>
        &copy; <span id="currentYear"></span> FDN Marine
        <a href="https://html.design/">Denizde Özgürlüğün Adı...</a>
    </p>
</footer>
<!-- footer section -->
<script src="admin/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="fontawesome-free-6.5.2-web/js/all.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
</body>

</html>