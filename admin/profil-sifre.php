<?php  include 'header.php' ?>
<div class="container">
  <h4>PROFİL ŞİFRE  
  <small>
<span>
      <?php if(isset($_GET['sifreguncellendi'])) { ?>

             <label class="alert alert-success "> <b>ŞİFRE GÜNCELLENDİ!</b> </label>

      <?php }
            if(isset($_GET['sifreguncellenmedi'])){ ?>

                   <label class="alert alert-danger "> <b>ŞİFRE GÜNCELLEME BAŞARISIZ</b></label>
            <?php } 


            if(isset($_GET['yenisifrelerhatali'])){ ?>
                   <label class="alert alert-danger "><b>YENİ ŞİFRE VE TEKRARI AYNI GİRİLMEDİ! </b></label>
            <?php } 

            if(isset($_GET['mevcut-sifre-ve-yeni-sifre-ayni'])){ ?>
              <label class="alert alert-danger "><b>MEVCUT ŞİFRE VE YENİ ŞİFRE AYNI OLAMAZ! </b></label>
            <?php }

            if(isset($_GET['mevcutsifrehatali'])){ ?>
              <label class="alert alert-danger "><b>MEVCUT ŞİFRE HATALI GİRİLDİ! </b></label>
            <?php } ?>
                </span>
               </small>      
                         
</h4>
<form action="islemler/islem.php" method="POST">

  <input type="text" name="admin_id" value="<?php echo $admin['admin_id']; ?>" hidden>

   <div class="form-group">
    <label for="exampleFormControlInput1">Mevcut Şifre</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" name="mevcutsifre" required >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Yeni Şifre</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" name="yenisifre" required >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Mevcut Şifre Tekrar</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" name="yenisifre_tekrar" required >
  </div>




  <button type="submit" class="btn btn-primary" align="right" name="sifreduzenle">Güncelle</button>


</form>

</div>
<?php include 'footer.php'; ?>
