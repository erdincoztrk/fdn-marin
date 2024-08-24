<?php
include 'header.php';
include_once('islemler/baglan.php');
$db = new dbConnection();
$getAboutUs = $db->getRow("SELECT * FROM tbaboutus");
?>
    <div class="container">
        <h4>Hakkımda Bilgi Düzenleme</h4>
        <form action="islemler/islem.php" id="aboutusForm">

            <div class="form-group">
                <label for="exampleFormControlInput1">Şirket Adı</label>
                <input type="text" class="form-control" name="siteName"
                          id="siteName" value="<?=$getAboutUs['about_siteName']?>">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Kuruluş Tarihi</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="foundationDate"
                       id="foundationDate" value="<?=$getAboutUs['about_foundationDate']?>">
            </div>


            <div class="form-group">
                <label for="exampleFormControlInput1">Biz Kimiz?</label>
                <textarea rows="4" cols="40" class="form-control" name="aboutUs"
                          id="aboutUs"><?=$getAboutUs['about_us']?></textarea>
            </div>



            <button type="button" class="btn btn-success" align="right" onclick="setAboutUs($('#aboutusForm'))">
                Düzenle
            </button>



        </form>
<?php include 'footer.php'; ?>