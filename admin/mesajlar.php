<?php include 'header.php';
$mesaj = $db->getRows("SELECT * FROM tbmessages");

 ?>
<div class="container">
	<h4><a href="mesaj-ekle.php"><button class="btn btn-success">+</button></a>   MESAJLAR</h4>

<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Gönderen Ad Soyad</th>
                  <th>Gönderen Mail</th>
                  <th>Konu</th>
                  <th>Mesaj</th>
                  <th>Tarih</th>                 
                  
                </tr>
              </thead>

              <tbody>

                <?php while($mesajgetir = $mesaj){ ?>
                <tr>
                  <td><?php echo $mesajgetir['mesaj_adsoyad'] ?></td>
                  <td><?php echo $mesajgetir['mesaj_mail'] ?></td>
                  <td><?php echo $mesajgetir['mesaj_konu'] ?></td>
                  <td><?php echo $mesajgetir['mesaj_detay'] ?></td>
                  <td><?php echo $mesajgetir['mesaj_tarih'] ?></td>
                
             
                 <?php } ?>
             
              </tbody>
            </table>

</div>

<?php include 'footer.php'?>