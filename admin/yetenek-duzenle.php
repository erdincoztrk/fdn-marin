<?php  include 'header.php';
$yetenekduzenlelist = $db->prepare("SELECT * FROM yetenek where yetenek_id = ?");
$yetenekduzenlelist -> execute([$_GET['yetenekid']]);
$yetenekgetir = $yetenekduzenlelist -> fetch(PDO::FETCH_ASSOC);


 ?>
<div class="container">
  <h4>YETENEK EKLEME
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
    <label for="exampleFormControlInput1">Yetenek Ad</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="yetenek_ad" value="<?php echo $yetenekgetir['yetenek_ad'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Yetenek Seviye=>(%)</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="yetenek_seviye" value="<?php echo $yetenekgetir['yetenek_seviye'] ?>">
  </div>

  <input type="text" name="yetenek_id" value="<?php echo $yetenekgetir['yetenek_id'] ?>" hidden>

  <button type="submit" class="btn btn-primary" align="right" name="yetenekguncelle">Güncelle</button>

</form>

</div>
<?php include 'footer.php'; ?>
