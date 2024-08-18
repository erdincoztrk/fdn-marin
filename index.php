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
                                <div id="logo">  </div>
                                <h1 style="font-family: 'Beyonders', sans-serif; display:none;">
                                <label> FDN </label> <br>
                                    <span style="margin-top:1rem;">
                        Marine
                      </span>
                                </h1>
                                <p>
                                    <!--Denizde özgürlüğün adı...-->
                                </p>
                                <div class="btn-box d-none">
                                    <a href="" class="btn-1">Confident 490</a>
                                    <a href="https://fdnmarine.sahibinden.com" target="_blank"
                                       class="btn-2">Confident Esteem</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container idicator_container d-none">
        <ol class="carousel-indicators">

            <a href="https://www.instagram.com/fdnmarine/" target="_blank"
               style="color:inherit; text-decoration: none; margin-right:2%">
                <i class="fa-brands fa-instagram fa-3x" style="
            margin-right:2%;
             transition: background-color 0.3s ease, color 0.3s ease;
}
"></i>
            </a>

            <a href="https://api.whatsapp.com/send?phone=905367134089" target="_blank"
               style="color:inherit; text-decoration: none; margin-right:2%;">
                <i class="fa-brands fa-whatsapp fa-3x" style="
            margin-right:2%;
            transition: background-color 0.3s ease, color 0.3s ease;
}
"></i>
            </a>

            <a href="https://www.facebook.com/people/Fdn-Marine/pfbid021hoSKzMQbbbZ7JBuxYTB6qJGWvNYBS7bwmWqAzgFfHVoZA2fE5p3mnarDGfZWVEAl/"
               target="_blank" style="color:inherit; text-decoration: none; margin-right:2%">
                <i class="fa-brands fa-facebook fa-3x" style=" transition: background-color 0.3s ease, color 0.3s ease; margin-right:2%;
}"></i>
            </a>

            <a href="https://fdnmarine.sahibinden.com/" target="_blank"
               style="color:inherit; text-decoration: none; margin-right:2%;">
                <i class="fa-solid fa-s fa-3x" style=" transition: background-color 0.3s ease, color 0.3s ease; margin-right:2%;
}"></i>
            </a>


            <!--  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
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
            <div class="col-md-6 px-0" >
                <div class="detail-box">
                    <div class="heading_container ">
                        <h2>
                            Biz Kimiz
                        </h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->


<!-- ÖZEL ÜRÜNLER SECTİON -->

<section class="team_section layout_padding d-none">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Özel Ürünlerimiz
            </h2>
        </div>
        <div class="row">

                <div class="col-md-6 col-sm-6 mx-auto ">
                    <a href="model-detay.php">
                    <div class="box">
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

            <div class="col-md-6 col-sm-6 mx-auto ">
                <a href="model-detay.php">
                <div class="box">
                    <div class="img-box">
                        <img src="images/magnum-first.jpeg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Confident
                        </h5>
                        <h6 class="">
                            Detayları Görmek İçin Tıkla
                        </h6>
                    </div>
                </div>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- end team section -->

<!-- ÜRÜNLER SECTION -->
<section class="team_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Modellerimiz
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 mx-auto ">
                <div class="box">
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
            </div>
            <div class="col-md-6 col-sm-6 mx-auto ">
                <div class="box">
                    <div class="img-box">
                        <img src="images/magnum-first.jpeg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Confident
                        </h5>
                        <h6 class="">
                            Detayları Görmek İçin Tıkla
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <a href="modeller.php">
                Hepsini Gör
            </a>
        </div>
    </div>
</section>

<!-- service section -->

<section class="service_section layout_padding d-none">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Diğer Servislerimiz
            </h2>
        </div>
        <div class="row" style=" justify-content: center;">
            <div class="col-md-4">
                <div class="box ">
                    <div class="img-box">
                        <img src="images/crane-transport-svgrepo-com.svg" style="width: 80px; height:auto;">
                    </div>
                    <div class="detail-box">
                        <h6>
                            FDN Oto ve Tekne Taşıyıcılığı
                        </h6>
                        <p>
                            Minima consequatur architecto eaque assumenda ipsam itaque quia eum in doloribus debitis
                            impedit ut minus tenetur corrupti excepturi ullam.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- end service section -->


<!-- client section -->

<section class="client_section layout_padding d-none">
    <div class="container ">
        <div class="heading_container heading_center">
            <h2>
                What is says our clients
            </h2>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/client.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Minim Veniam
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/client.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Minim Veniam
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/client.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Minim Veniam
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- end client section -->

<!-- contact section -->

<section class="contact_section layout_padding d-none">
    <div class="contact_bg_box">
        <div class="img-box">
            <img src="images/contact-bg.jpg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Get In touch
            </h2>
        </div>
        <div class="">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <form action="#">
                        <div class="contact_form-container">
                            <div>
                                <div>
                                    <input type="text" placeholder="Full Name"/>
                                </div>
                                <div>
                                    <input type="email" placeholder="Email "/>
                                </div>
                                <div>
                                    <input type="text" placeholder="Phone Number"/>
                                </div>
                                <div class="">
                                    <input type="text" placeholder="Message" class="message_input"/>
                                </div>
                                <div class="btn-box ">
                                    <button type="submit">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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