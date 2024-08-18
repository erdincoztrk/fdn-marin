<?php include 'header.php';
$diller = $db->prepare("SELECT * FROM diller order by dil_ad ASC");
$diller->execute();

 ?>
<div class="container">
	<h4><a href="dil-ekle.php"><button class="btn btn-success">+</button></a>   Yazılım Dilleri
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
                  <th>Dil Adı</th>
                  <th>Dil Gönderi Sayısı</th>
                                     
                </tr>
              </thead>

              <tbody>

                <?php while($dillergetir = $diller->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                <td><?php echo $dillergetir['dil_ad'] ?></td>
                <td><?php echo $dillergetir['dil_sayi'] ?></td>             
                 <?php } ?>
             
              </tbody>
            </table>

</div>

<?php include 'footer.php'?>