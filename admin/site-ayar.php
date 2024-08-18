<?php  include 'header.php' ?>
<div class="container">
  <h4>GENEL SİTE AYARLARI GÜNCELLEME
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
               <hr>

<form action="islemler/islem.php" method="POST">

   <div class="form-group">
    <label for="exampleFormControlInput1">Site Başlığı</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ayar_title" value="<?php echo $ayargetir['ayar_title'] ?>" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Anahtar Kelimesi</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ayar_keyword" value="<?php echo $ayargetir['ayar_keyword'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Yazar Adı</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ayar_author" value="<?php echo $ayargetir['ayar_author'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Site Açıklaması</label>
    <textarea rows="4" cols="40" class="form-control" id="exampleFormControlInput1" name="ayar_description" ><?php echo $ayargetir['ayar_description'] ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary" align="right" name="genelayarguncelle">Güncelle</button>


</form>

</div>































<?php include 'footer.php' ?>