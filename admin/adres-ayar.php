<?php  include 'header.php' ?>
<div class="container">
  <h4>ADRES GÜNCELLEME</h4>
<form action="islemler/islem.php" method="POST">

   <div class="form-group">
    <label for="exampleFormControlInput1">İl</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ayar_il" value="" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">İlçe</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ayar_ilce" value="">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Adres</label>
    <textarea rows="4" cols="40" class="form-control" id="exampleFormControlInput1" name="ayar_adres" ></textarea>
  </div>
  <button type="submit" class="btn btn-primary" align="right" name="adresayarguncelle">Güncelle</button>


</form>

</div>
<?php include 'footer.php'; ?>




























