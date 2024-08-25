<?php
include '../islemler/baglan.php';
$db = new dbConnection();
$name = $_POST['name'];
$model = $_POST['model'];
$type = $_POST['type'];
$productionModule = $_POST['productionModule'];
$designCategory = $_POST['designCategory'];
$size = $_POST['size'];
$width = $_POST['width'];
$externalHeight = $_POST['externalHeight'];
$interiorHeight = $_POST['externalHeight'];
$weight = $_POST['weight'];
$recommendedEngine = $_POST['recommendedEngine'];
$detail = $_POST['detail'];

$productArray = [
    $name,
    $model,
    $type,
    $productionModule,
    $designCategory,
    $size,
    $width,
    $externalHeight,
    $interiorHeight,
    $weight,
    $recommendedEngine,
    $detail
];

$uploadDir = '../../images/';
$photoPaths = [];

if (isset($_FILES['images'])) {
    foreach ($_FILES['images']['name'] as $key => $filename) {
        if ($_FILES['images']['error'][$key] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES['images']['tmp_name'][$key];
            $newFilename = basename($filename);
            $uploadFile = $uploadDir . $newFilename;

            // Dosyayı belirtilen yükleme dizinine taşı
            if (move_uploaded_file($tmpName, $uploadFile)) {
                $photoPaths[] = $uploadFile; // Yüklenen dosya yolunu kaydet
            } else {
                echo "Failed to upload file: " . $filename;
            }
        } else {
            echo "Error occurred with file: " . $filename;
        }
    }
}

// Yüklenen dosya yollarını JSON olarak saklayabiliriz
$uploadedFilesJson = $photoPaths;
var_dump($uploadedFilesJson);

$addQuery = $db->query("INSERT INTO tbproduct(product_name, product_model, product_type, product_productionModule, product_designCategory, product_size, product_width,product_externalHeight, product_interiorHeight, product_weight, product_recommendedEngine, product_detail) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)", $productArray);
$productid = $db->lastInsertId();
if ($addQuery) {
    foreach ($photoPaths as $item) {
        $imagesArray = [$item, 'product', $productid];
        $db->query("INSERT INTO tbimages(image_path, image_field, image_productid) VALUES(?,?,?)", $imagesArray);
    }
}


echo $addQuery ? 'successful' : 'unsuccessful';
