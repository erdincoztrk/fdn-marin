<?php  include 'header.php';
$yazilimdiller = $db->prepare("SELECT dil_ad FROM diller order by dil_ad ASC");
$yazilimdiller->execute();

 ?>
<div class="container">
  <a href="solutions.php"><i class="fas fa-fw fa-arrow-left"></i></a>
  <h4>Çözüm Ekleme 
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
    <label for="exampleFormControlInput1">Solution Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="solution_name">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Solution Language</label><br>    
<select name="solution_language" class="form-control" id="exampleFormControlInput1">
  <?php while($yazilimdil = $yazilimdiller->fetch(PDO::FETCH_ASSOC)){ ?>
  <option value="<?php echo $yazilimdil['dil_ad'] ?>"><?php echo $yazilimdil['dil_ad'] ?></option>
<?php } ?>
</select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Solution Detail</label>
    <textarea rows="4" cols="40" class="form-control ckeditor" id="exampleFormControlInput1" name="solution_detail"></textarea>
  </div>

  

  <button type="submit" class="btn btn-primary" align="right" name="solutionekle">Ekle</button>

</form>

</div>
<?php include 'footer.php'; ?>
