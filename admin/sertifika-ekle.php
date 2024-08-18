<?php  include 'header.php' ?>
<div class="container">
  <h4>Sertifika Ekleme
  <small>
<span>
       <?php if(isset($_GET['islem'])){
                  if($_GET['islem'] == "successfuly"){?>
                    <label class="alert alert-success "> İŞLEM BAŞARILI </label>

                <?php  } 
                elseif($_GET['islem'] == "unsuccessfuly"){?>
                  <label class="alert alert-danger "> İŞLEM BAŞARISIZ </label>


               <?php } } ?>
                </span>
               </small>            
</h4>
<form action="islemler/islem.php" method="POST" enctype="multipart/form-data">

   <div class="form-group">
    <label for="exampleFormControlInput1">Sertifika Ad</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="sertifika_ad"  >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Sertifika Tarih</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name="sertifika_tarih" >
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Sertifika Detay</label>
    <textarea rows="4" cols="40" class="form-control ckeditor" id="exampleFormControlInput1" name="sertifika_detay" ></textarea>
  </div>

  <hr>
<!-- FOTOĞRAF EKLEME DENEMESİ -->

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name"  name="ayar_logo"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
            
    <hr>
    <button type="submit" class="btn btn-success" align="right" name="sertifikaekle">Ekle</button>


</form>

</div>
<?php include 'footer.php'; ?>




























