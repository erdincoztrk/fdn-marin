<?php include 'header.php';


?>
<div class="container">
    <a href="solutions.php"><i class="fas fa-fw fa-arrow-left"></i></a>
    <h4>Model Ekleme</h4>
    <form action="islemler/islem.php" id="addModelForm" enctype="multipart/form-data">
        <div class="row">

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Marka</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Model</label><br>
                <input type="text" name="model" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tipi</label><br>
                <input type="text" name="type" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Üretim Modülü</label><br>
                <input type="text" name="productionModule" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tasarım Kategorisi</label><br>
                <input type="text" name="designCategory" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tekne Boyu</label><br>
                <input type="text" name="size" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tekne Eni</label><br>
                <input type="text" name="width" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">İç Yükseklik</label><br>
                <input type="text" name="externalHeight" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Dış Yükseklik</label><br>
                <input type="text" name="interiorHeight" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Ağırlık</label><br>
                <input type="text" name="weight" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-12">
                <label for="exampleFormControlInput1">Önerilen Motor</label><br>
                <input type="text" name="recommendedEngine" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-12">
                <label for="exampleFormControlInput1">Detay</label><br>
                <textarea cols="40" rows="4" id="editor" name="textarea" onchange="alert('deneme')"></textarea>
                <textarea style="display:none;" id="bridge" name="detail"></textarea>
            </div>

            <div id="photos" class="row">
                <div class="form-group col-md-12">
                    <label for="path1">Fotoğraflar</label>
                    <input type="file" id="path1" name="images[]" class="form-control-file" multiple>
                    <label for="description1">Alt  Yazı</label>
                    <input hidden type="text" id="description1" name="description1" class="form-control" />
                </div>
            </div>

            <input type="hidden" name="photoLength" id="photoLength" />

        </div>


        <button type="button" class="btn btn-primary" style="margin-bottom:.5rem;" onclick="ChangeTextArea();setAddModel($('#addModelForm'))">Ekle</button>
        <button type="button" class="btn btn-success" style="margin-bottom:.5rem;" onclick="addPhoto();"><i class="fa fa-plus"></i></button>

    </form>

</div>
<?php include 'footer.php'; ?>
