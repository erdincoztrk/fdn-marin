<?php include 'header.php';


 ?>
<div class="container">
	<h4><a href="sertifika-ekle.php"><button class="btn btn-success">+</button></a>   SERTİFİKALAR
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
                  <th>Sertifika Ad</th>
                  <th>Sertifika Tarih</th>
                  <th>Sertifika Düzenle</th>
                  <th>Sertifika Sil</th>
                  
                  
                  
                </tr>
              </thead>

              <tbody>

                <?php while($sertifikagetir = $sertifika->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                  <td><?php echo $sertifikagetir['sertifika_ad']; ?></td>
                  <td><?php echo $sertifikagetir['sertifika_tarih']; ?></td>
                  <td><a href="sertifika-duzenle.php?sertifikaid=<?php echo $sertifikagetir['sertifika_id'];  ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                  <td><a href="islemler/islem.php?yeteneksil=<?php   ?>"><button  class="btn btn-danger">Sil</button></a></td>
             
                 <?php } ?>
             
              </tbody>
            </table>

</div>

<?php include 'footer.php'?>