<?php include 'header.php';


?>
<div class="container">
    <a href="solutions.php"><i class="fas fa-fw fa-arrow-left"></i></a>
    <h4>Model Ekleme</h4>
    <form action="islemler/islem.php" method="POST">
        <div class="row">

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Marka</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="product_name">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Model</label><br>
                <input type="text" name="product_model" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tipi</label><br>
                <input type="text" name="product_type" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Üretim Modülü</label><br>
                <input type="text" name="product_productionModule" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tasarım Kategorisi</label><br>
                <input type="text" name="product_designCategory" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tekne Boyu</label><br>
                <input type="text" name="product_size" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Tekne Eni</label><br>
                <input type="text" name="product_width" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">İç Yükseklik</label><br>
                <input type="text" name="product_externalHeight" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Dış Yükseklik</label><br>
                <input type="text" name="product_interiorHeight" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Ağırlık</label><br>
                <input type="text" name="product_weight" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-12">
                <label for="exampleFormControlInput1">Önerilen Motor</label><br>
                <input type="text" name="product_recommendedEngine" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group col-md-12">
                <label for="exampleFormControlInput1">Detay</label><br>
                <textarea cols="40" rows="4" id="editor"></textarea>
            </div>

        </div>


        <button type="submit" class="btn btn-primary" align="right" name="solutionekle">Ekle</button>

    </form>

</div>
<?php include 'footer.php'; ?>
