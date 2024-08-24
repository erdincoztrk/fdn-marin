<?php
include 'header.php';
require_once('islemler/baglan.php');
$db = new dbConnection();
$getComm = $db->getRow("SELECT * FROM tbcommunication");
?>
<div class="container">
<h4>İLETİŞİM BİLGİLERİ GÜNCELLEME</h4>


<form action="islemler/islem.php" id="communicationForm">

   <div class="form-group">
    <label for="exampleFormControlInput1">Telefon Numarası</label>
    <input type="text" class="form-control" name="tel" id="tel" value="<?=$getComm['comm_tel']?>" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Mail Adresi</label>
    <input type="text" class="form-control" name="mail" id="mail" value="<?=$getComm['comm_mail']?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Instagram</label>
    <input type="text" class="form-control" name="instagram" id="instagram" value="<?=$getComm['comm_instagram']?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Facebook</label>
    <input type="text" class="form-control" name="facebook" id="facebook" value="<?=$getComm['comm_facebook']?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Sahibinden</label>
    <input type="text" class="form-control" name="sahibinden" id="sahibinden" value="<?=$getComm['comm_sahibinden']?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">İl</label>
    <input type="text" class="form-control" name="city" id="city" value="<?=$getComm['comm_city']?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">İlçe</label>
    <input type="text" class="form-control" name="distinct" id="distinct" value="<?=$getComm['comm_distinct']?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Adres</label>
    <input type="text" class="form-control" name="adress"  id="adress" value="<?=$getComm['comm_adress']?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Google Map</label>
    <input type="text" class="form-control" name="googleMap" id="googleMap" value="<?=$getComm['comm_googlemap']?>">
  </div>

 



  <button type="button" class="btn btn-primary" align="right" onclick="setCommunication($('#communicationForm'));">Güncelle</button>


</form>

</div>




<?php include 'footer.php' ?>