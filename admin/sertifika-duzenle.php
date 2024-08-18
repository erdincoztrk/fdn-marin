<?php  include 'header.php';
$sertifikaduzenle = $db->prepare("SELECT * FROM sertifika where sertifika_id = ?");
$sertifikaduzenle -> execute([$_GET['sertifikaid']]);
$sertifikalistele = $sertifikaduzenle->fetch(PDO::FETCH_ASSOC);


 ?>
<div class="container">
  <a href="sertifikalar.php"><i class="fas fa-fw fa-arrow-left"></i></a>
  <h4>SERTİFİKA BİLGİ DÜZENLEME
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
<input type="text" name="sertifika_id" value="<?php echo $sertifikalistele['sertifika_id']; ?>" hidden>
   <div class="form-group">
    <label for="exampleFormControlInput1">Sertifika Ad</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="sertifika_ad" value="<?php echo $sertifikalistele['sertifika_ad'] ?>"  >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Sertifika Tarih</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name="sertifika_tarih" value="<?php echo $sertifikalistele['sertifika_tarih'] ?>">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Sertifika Detay</label>
    <textarea rows="4" cols="40" class="form-control ckeditor" id="exampleFormControlInput1" name="sertifika_detay" ><?php echo $sertifikalistele['sertifika_detay'] ?></textarea>
  </div>


    <button type="submit" class="btn btn-primary" align="right" name="sertifikaduzenle">Bilgi Düzenle</button>
  <hr>

</form>

 <h4>SERTİFİKA FOTOĞRAF GÜNCELLEME
  <small>
<span>
       <?php if(isset($_GET['fotoislem'])){
                  if($_GET['fotoislem'] == "successfuly"){?>
                    <label class="alert alert-success "> İŞLEM BAŞARILI </label>

                <?php  } 
                elseif($_GET['fotoislem'] == "unsuccessfuly"){?>
                  <label class="alert alert-danger "> İŞLEM BAŞARISIZ </label>


               <?php } } ?>
                </span>
               </small>            
</h4>

<!-- SERTİFİKA FOTOĞRAF GÜNCELLE -->
<form action="islemler/islem.php" method="POST" enctype="multipart/form-data">
  <input type="text" name="sertifika_id" value="<?php echo $sertifikalistele['sertifika_id']; ?>" hidden>
                    <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Fotoğraf<br><span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">

                    <?php 
                    if (strlen($sertifikalistele['sertifika_fotograf'])>0) {?>

                    <img width="200"  src="../<?php echo $sertifikalistele['sertifika_fotograf']; ?>">

                    <?php } else {?>


                    <img width="200"  src="../images/resim-yok.png">


                    <?php } ?>

                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fotoğraf Seç<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name"  name="ayar_logo"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <input type="hidden" name="eski_yol" value="<?php echo $sertifikalistele['sertifika_fotograf']; ?>">

                <div align="" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="sertifikafotograf" class="btn btn-primary">Fotoğraf Güncelle</button>
                </div>
        </form>
            
    <hr>
  
</div>
<?php include 'footer.php'; ?>




























