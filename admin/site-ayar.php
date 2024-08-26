<?php
include 'header.php';
$getSettings = $db->getRow("SELECT * FROM tbsitesettings");


?>
<div class="container">
  <h4>GENEL SİTE AYARLARI GÜNCELLEME</h4>
               <hr>

<form action="islemler/islem.php" id="siteSettingsForm">

   <div class="form-group">
    <label for="exampleFormControlInput1">Site Başlığı</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="<?=$getSettings['setting_title']?>" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Anahtar Kelimeleri</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="keyword" value="<?=$getSettings['setting_keyword']?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Yazar Adı</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="author" value="<?=$getSettings['setting_author']?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Site Açıklaması</label>
    <textarea rows="4" cols="40" class="form-control" id="exampleFormControlInput1" name="description" ><?=$getSettings['setting_description']?></textarea>
  </div>
  <button type="button" class="btn btn-primary" align="right" onclick="setSiteSettings($('#siteSettingsForm'))">Güncelle</button>


</form>

</div>































<?php include 'footer.php' ?>