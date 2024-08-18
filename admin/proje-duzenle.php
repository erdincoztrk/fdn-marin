<?php  include 'header.php';
$projeduzenle = $db->prepare("SELECT * FROM proje where proje_id = ?");
$projeduzenle -> execute([$_GET['projeid']]);
$projelistele = $projeduzenle->fetch(PDO::FETCH_ASSOC);


 ?>
<div class="container">
  <a href="projeler.php"><i class="fas fa-fw fa-arrow-left"></i></a>
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
<form action="" method="POST" enctype="multipart/form-data">
<input type="text" name="proje_id" value="<?php echo $projelistele['proje_id']; ?>" hidden>
   <div class="form-group">
    <label for="exampleFormControlInput1">Proje Ad</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="proje_ad" value="<?php echo $projelistele['proje_name'] ?>"  >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Proje CV Açıklama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="proje_tarih" value="<?php echo $projelistele['proje_cvaciklama'] ?>">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Proje Açıklama</label>
    <textarea rows="4" cols="40" class="form-control ckeditor" id="exampleFormControlInput1" name="proje_detay" ><?php echo $projelistele['proje_aciklama'] ?></textarea>
  </div>
<?php for($i=1;$i<=$projelistele['proje_fotosayi'];$i++){ ?>
  <div class="form-group">
    <label for="exampleFormControlInput1"><?php echo "Proje Foto $i Açıklama"; ?></label>
    <textarea rows="4" cols="40" class="form-control ckeditor" id="exampleFormControlInput1" name="proje_detay" ><?php echo $projelistele['proje_foto'.$i.'_aciklama'] ?></textarea>
  </div>
<?php } ?>

<div class="form-group">
    <label for="exampleFormControlInput1">Proje Fotoğraf Sayısı</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="proje_tarih" value="<?php echo $projelistele['proje_fotosayi'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Proje Fotoğraf Linki</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="proje_tarih" value="<?php echo $projelistele['proje_link'] ?>">
  </div>

    <button type="" class="btn btn-primary" align="right" name="">Bilgi Düzenle</button>
  <hr>

</form>


<!-- SERTİFİKA FOTOĞRAF GÜNCELLE -->

            
    <hr>
  
</div>
<?php include 'footer.php'; ?>




























