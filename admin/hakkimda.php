<?php
  include 'header.php';
  $hakkimda = $hakkimdabilgi->fetch(PDO::FETCH_ASSOC);
 ?>
<div class="container">
  <h4>Hakkımda Bilgi Düzenleme
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
<input type="text" name="hakkimda_id" value="<?php echo $hakkimda['hakkimda_id'] ?>" hidden>
<div class="form-group">
    <label for="exampleFormControlInput1">Ben Kimim?</label>
    <textarea rows="4" cols="40" class="form-control ckeditor" id="exampleFormControlInput1" name="hakkimda_benkimim" value=""><?php echo $hakkimda['hakkimda_benkimim'] ?></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Doğum Tarihi</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name="hakkimda_dtarih" value="<?php echo $hakkimda['hakkimda_dtarih'] ?>" >
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Hedef</label>
    <textarea rows="4" cols="40" class="form-control ckeditor" id="exampleFormControlInput1" name="hakkimda_hedef" value="" ><?php echo $hakkimda['hakkimda_hedef'] ?></textarea>
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Üniversite</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="hakkimda_uni" value="<?php echo $hakkimda['hakkimda_uni'] ?>">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">lise</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="hakkimda_lise" value="<?php echo $hakkimda['hakkimda_lise'] ?>">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Hobiler</label>
    <textarea rows="4" cols="40" class="form-control ckeditor" id="exampleFormControlInput1" name="hakkimda_hobi" value=""><?php echo $hakkimda['hakkimda_hobi'] ?></textarea>
  </div>


  <button type="submit" class="btn btn-success" align="right" name="hakkimdaduzenle">Düzenle</button>


</form>
<?php include 'footer.php'; ?>