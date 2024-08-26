<?php include 'header.php';
$getModel = $db->getRow("SELECT * FROM tbproduct WHERE product_id = {$_GET['id']}");
var_dump($getModel);
?>
<div class="container">
    <a href="model-listele.php"><i class="fas fa-fw fa-arrow-left"></i></a>
    <h4>Model Ekleme</h4>
    <form action="islemler/islem.php" id="addModelForm" enctype="multipart/form-data">
        <div class="row">

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Marka</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?=$getModel['product_name']?>">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Model</label><br>
                <input type="text" name="model" class="form-control" id="exampleFormControlInput1" value="<?=$getModel['product_model']?>">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tipi</label><br>
                <input type="text" name="type" class="form-control" id="exampleFormControlInput1" value="<?=$getModel['product_type']?>">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Üretim Modülü</label><br>
                <input type="text" name="productionModule" class="form-control" id="exampleFormControlInput1" value="<?=$getModel['product_productionModule']?>">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tasarım Kategorisi</label><br>
                <input type="text" name="designCategory" class="form-control" id="exampleFormControlInput1" value="<?=$getModel['product_designCategory']?>">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tekne Boyu</label><br>
                <input type="text" name="size" class="form-control" id="exampleFormControlInput1" value="<?=$getModel['product_size']?>">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tekne Eni</label><br>
                <input type="text" name="width" class="form-control" id="exampleFormControlInput1" value="<?=$getModel['product_width']?>">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">İç Yükseklik</label><br>
                <input type="text" name="externalHeight" class="form-control" id="exampleFormControlInput1" value="<?=$getModel['product_externalHeight']?>">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Dış Yükseklik</label><br>
                <input type="text" name="interiorHeight" class="form-control" id="exampleFormControlInput1" value="<?=$getModel['product_interiorHeight']?>">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Ağırlık</label><br>
                <input type="text" name="weight" class="form-control" id="exampleFormControlInput1" value="<?=$getModel['product_weight']?>">
            </div>

            <div class="form-group col-md-12">
                <label for="exampleFormControlInput1">Önerilen Motor</label><br>
                <input type="text" name="recommendedEngine" class="form-control" id="exampleFormControlInput1" value="<?=$getModel['product_recommendedEngine']?>">
            </div>

            <div class="form-group col-md-12">
                <label for="exampleFormControlInput1">Detay</label><br>
                <textarea cols="40" rows="4" id="editor" name="textarea" onchange="alert('deneme')"><?=$getModel['product_detail']?></textarea>
                <textarea style="display:none;" id="bridge" name="detail"></textarea>
            </div>

            <div id="photos" class="row">
                <div class="form-group col-md-12">
                    <label for="path1">Fotoğraf Ekle</label>
                    <input type="file" id="path1" name="images[]" class="form-control-file" multiple>
                    <label for="description1">Alt  Yazı</label>
                    <input hidden type="text" id="description1" name="description1" class="form-control" />
                </div>
            </div>

            <input type="hidden" name="photoLength" id="photoLength" />
            <div id="photoTable" class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Fotoğraf Sıra</th>
                        <th>Fotoğraf</th>
                        <th>Alt Metin</th>
                        <th>İşlemler</th>
                    </tr>
                   <?php
                   $counter = 1;
                   $getPhotos = $db->getRows("SELECT * FROM tbimages WHERE image_productid = {$getModel['product_id']}");
                   foreach ($getPhotos as $photos){?>
                       <tr>
                           <th><?=$counter?></th>
                           <th><img src="../<?=$photos['image_path']?>" style="width:300px; height:200px;" /></th>
                           <th><input type="text" class="form-control" name="description" /></th>
                           <th>
                               <button type="button" class="btn btn-danger" onclick="setDeleteModelPhoto(<?=$photos['image_id']?>, <?=$getModel['product_id']?>);">Sil</button>
                           </th>
                       </tr>
                 <?php
                       $counter++;
                   }
                   ?>
                </table>
            </div>

        </div>


        <button type="button" class="btn btn-primary" style="margin-bottom:.5rem;" onclick="ChangeTextArea();setAddModel($('#addModelForm'))">Güncelle</button>

    </form>

</div>
<?php include 'footer.php'; ?>
