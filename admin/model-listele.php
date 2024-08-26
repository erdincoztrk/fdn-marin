<?php
include 'header.php';
$getModels = $db->getRows("SELECT * FROM tbproduct");

 ?>
<div class="container">
	<h4><a href="model-ekle.php"><button class="btn btn-success">+</button></a>   Modeller
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
                    <th></th>
                  <th>Ürün Ad</th>
                  <th>Ürün Model</th>
                  <th>ürün Tipi</th>
                  <th>İşlemler</th>
                </tr>
              </thead>

              <tbody>

                <?php
                foreach($getModels as $item){
                    $getPhoto = $db->getRow("SELECT * FROM tbimages WHERE image_productid = $item[product_id]");
                    ?>
                <tr>
                    <td><img src="../<?=$getPhoto['image_path']?>" style="width: 60px; height: 60px;" /></td>
                  <td><?php echo $item['product_name'] ?></td>
                  <td><?php echo $item['product_model'] ?></td>
                   <td><?php echo $item['product_type'] ?></td>
                  <td><a href="model-duzenle.php?id=<?php echo $item['product_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                  <td><button type="button" onclick="setDeleteModel(<?=$item['product_id']?>)" class="btn btn-danger">Sil</button></td>
             
                 <?php } ?>
             
              </tbody>
            </table>

</div>

<?php include 'footer.php'?>