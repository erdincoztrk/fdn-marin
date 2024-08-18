<?php include 'header.php';
$yetenek = $db->prepare("SELECT * FROM yetenek order by yetenek_seviye DESC");
$yetenek->execute();

 ?>
<div class="container">
	<h4><a href="yetenek-ekle.php"><button class="btn btn-success">+</button></a>   YETENEKLER 
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
                  <th>Yetenek Ad</th>
                  <th>Yetenek Seviye</th>
                  <th>Yetenek Düzenle</th>
                  <th>Yetenek Sil</th>
                  
                  
                  
                </tr>
              </thead>

              <tbody>

                <?php while($yetenekgetir = $yetenek->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                  <td><?php echo $yetenekgetir['yetenek_ad'] ?></td>
                  <td><?php echo $yetenekgetir['yetenek_seviye'] ?></td>
                  <td><a href="yetenek-duzenle.php?yetenekid=<?php echo $yetenekgetir['yetenek_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                  <td><a href="islemler/islem.php?yeteneksil=<?php echo $yetenekgetir['yetenek_id']; ?>"><button  class="btn btn-danger">Sil</button></a></td>
             
                 <?php } ?>
             
              </tbody>
            </table>

</div>

<?php include 'footer.php'?>