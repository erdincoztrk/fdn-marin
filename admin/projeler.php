<?php include 'header.php';
$proje = $db->prepare("SELECT * FROM proje");
$proje->execute();

 ?>
<div class="container">
	<h4><a href="proje-ekle.php"><button class="btn btn-success">+</button></a>   PROJELER 
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
                  <th>Proje Ad</th>
                  <th>Proje Düzenle</th>
                  <th>Proj Sil</th>
                  
                  
                  
                </tr>
              </thead>

              <tbody>

                <?php while($projegetir = $proje->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                  <td><?php echo $projegetir['proje_name']; ?></td>
                  <td><a href="proje-duzenle.php?projeid=<?php echo $projegetir['proje_id'] ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                  <td><a href="islemler/islem.php?projesil=<?php  ?>"><button  class="btn btn-danger">Sil</button></a></td>
             
                 <?php } ?>
             
              </tbody>
            </table>

</div>

<?php include 'footer.php'?>