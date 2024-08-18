<?php  include 'header.php' ?>
<div class="container">
<h4>İLETİŞİM BİLGİLERİ GÜNCELLEME
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


<form action="islemler/islem.php" method="POST">

   <div class="form-group">
    <label for="exampleFormControlInput1">Telefon Numarası</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ayar_gsm" value="<?php echo $ayargetir['ayar_gsm'] ?>" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Mail Adresi</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ayar_mail" value="<?php echo $ayargetir['ayar_mail'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Instagram</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ayar_instagram" value="<?php echo $ayargetir['ayar_instagram'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Twitter</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ayar_twitter" value="<?php echo $ayargetir['ayar_twitter'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">LinkedIn</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ayar_linkedin" value="<?php echo $ayargetir['ayar_linkedin'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Github</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ayar_github" value="<?php echo $ayargetir['ayar_github'] ?>">
  </div>

 



  <button type="submit" class="btn btn-primary" align="right" name="iletisimayarguncelle">Güncelle</button>


</form>

</div>































<?php include 'footer.php' ?>