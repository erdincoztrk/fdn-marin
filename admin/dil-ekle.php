<?php  include 'header.php' ?>
<div class="container">
  <a href="yazilim-dilleri.php"><i class="fas fa-fw fa-arrow-left"></i></a>
  <h4>DİL EKLEME 
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
    <label for="exampleFormControlInput1">Dil Ad</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="dil_ad">
  </div>

  <button type="submit" class="btn btn-primary" align="right" name="dilekle">Ekle</button>

</form>

</div>
<?php include 'footer.php'; ?>
