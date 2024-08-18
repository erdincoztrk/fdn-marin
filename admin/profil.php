<?php  include 'header.php' ?>
<div class="container">
  <h4>PROFİL
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

  <input type="text" name="admin_id" value="<?php echo $admin['admin_id']; ?>" hidden>

   <div class="form-group">
    <label for="exampleFormControlInput1">Ad</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="admin_ad" value="<?php echo $admin['admin_ad'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Soyad</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="admin_soyad" value="<?php echo $admin['admin_soyad'] ?>">
  </div>

    <div class="form-group">
    <label for="exampleFormControlInput1">Mail</label>
    <input type="mail" class="form-control" id="exampleFormControlInput1" name="admin_email" value="<?php echo $admin['admin_email'] ?>">
  </div>

    <div class="form-group">
    <label for="exampleFormControlInput1">Rütbe</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="admin_rutbe" value="<?php echo $admin['admin_rutbe'] ?>" disabled>
  </div>



  <button type="submit" class="btn btn-primary" align="right" name="adminduzenle">Düzenle</button>

</form>
<br>
<a href="profil-sifre.php?id=<?php echo $admin['admin_id']; ?>"><button class="btn btn-primary" align="right" name="sifreduzenle">Şifre Değiştir</button></a>

</div>
<?php include 'footer.php'; ?>
