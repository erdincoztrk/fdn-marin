<?php  include 'header.php' ?>
<div class="container">
<h4>İLETİŞİM BİLGİLERİ GÜNCELLEME</h4>


<form action="islemler/islem.php" id="communicationForm">

   <div class="form-group">
    <label for="exampleFormControlInput1">Telefon Numarası</label>
    <input type="text" class="form-control" name="tel" id="tel" value="" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Mail Adresi</label>
    <input type="text" class="form-control" name="mail" id="mail" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Instagram</label>
    <input type="text" class="form-control" name="instagram" id="instagram" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Facebook</label>
    <input type="text" class="form-control" name="facebook" id="facebook" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Sahibinden</label>
    <input type="text" class="form-control" name="sahibinden" id="sahibinden" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">İl</label>
    <input type="text" class="form-control" name="city" id="city" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">İlçe</label>
    <input type="text" class="form-control" name="distinct" id="distinct" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Adres</label>
    <input type="text" class="form-control" name="adress"  id="adress" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Google Map</label>
    <input type="text" class="form-control" name="googleMap" id="googleMap" value="">
  </div>

 



  <button type="button" class="btn btn-primary" align="right" onclick="setCommunication($('#communicationForm'));">Güncelle</button>


</form>

</div>




<?php include 'footer.php' ?>