<?php  include 'header.php';
$yazilimdiller = $db->prepare("SELECT dil_ad FROM diller order by dil_ad ASC");
$yazilimdiller->execute();
$solution = $db->prepare("SELECT * FROM solutions where solution_id = ?");
$solution->execute([$_GET['solutionid']]);
$solutions = $solution -> fetch(PDO::FETCH_ASSOC);
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
  <input type="text" name="solution_id" value="<?php echo $solutions['solution_id']; ?>" hidden>
   <div class="form-group">
    <label for="exampleFormControlInput1">Solution Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="solution_name" value="<?php echo $solutions['solution_name']; ?>">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Solution Language</label><br>    
<select name="solution_language" class="form-control" id="exampleFormControlInput1">
  <option value="<?php echo $solutions['solution_language'] ?>"><?php echo $solutions['solution_language'] ?></option>
  <?php while($yazilimdil = $yazilimdiller->fetch(PDO::FETCH_ASSOC)){ ?>
  <option value="<?php 
  if($yazilimdil['dil_ad'] == $solutions['solution_language']){
    continue;
  }
  echo $yazilimdil['dil_ad'] ?>"><?php echo $yazilimdil['dil_ad'] 
?></option>
<?php } ?>
</select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Solution Detail</label>
    <textarea rows="4" cols="40" class="form-control ckeditor" id="exampleFormControlInput1" name="solution_detail"><?php echo $solutions['solution_detail']  ?></textarea>
  </div>

  <input type="text" name="eskidil" value="<?php echo $solutions['solution_language']; ?>" hidden>

  <button type="submit" class="btn btn-primary" align="right" name="solutionduzenle">Düzenle</button>

</form>

</div>
<?php include 'footer.php'; ?>
