<?php include 'header.php';
$solution = $db->prepare("SELECT * FROM solutions ");
$solution->execute();

 ?>
<div class="container">
	<h4><a href="cozum-ekle.php"><button class="btn btn-success">+</button></a>   ÇÖZÜMLER
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

<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Solution Ad</th>
                  <th>Solution Dil Adı</th>
                  <th>Eklenme Tarihi</th>
                  <th>İşlemler</th>
                    
                  
                  
                  
                </tr>
              </thead>

              <tbody>

                <?php while($solutiongetir = $solution->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                  <td><?php echo $solutiongetir['solution_name'] ?></td>
                  <td><?php echo $solutiongetir['solution_language'] ?></td>
                   <td><?php echo $solutiongetir['solution_date'] ?></td>
                  <td><a href="solution-duzenle.php?solutionid=<?php echo $solutiongetir['solution_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                  <td><a href="islemler/islem.php?solutionsil=<?php echo $solutiongetir['solution_id']; ?>"><button  class="btn btn-danger">Sil</button></a></td>
             
                 <?php } ?>
             
              </tbody>
            </table>

</div>

<?php include 'footer.php'?>