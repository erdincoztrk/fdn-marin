<?php
include '../islemler/baglan.php';
include '../islemler/fonksiyon.php';
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
$url = seo($name).'-'.seo($model);
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
    $detail,
    $url
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
                $photoPaths[] = 'images/'.$newFilename; // Yüklenen dosya yolunu kaydet
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

$addQuery = $db->query("INSERT INTO tbproduct(product_name, product_model, product_type, product_productionModule, product_designCategory, product_size, product_width,product_externalHeight, product_interiorHeight, product_weight, product_recommendedEngine, product_detail, product_url) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)", $productArray);
$productid = $db->lastInsertId();
if ($addQuery) {
    foreach ($photoPaths as $item) {
        $imagesArray = [$item, 'product', $productid];
        $db->query("INSERT INTO tbimages(image_path, image_field, image_productid) VALUES(?,?,?)", $imagesArray);
    }

// cURL kaynağını başlat
$ch = curl_init();

// İstek yapacağınız URL
$url = 'https://www.fdnmarine.com/admin/islemler/sitemap.php';

// cURL seçeneklerini ayarlayın
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); // Yanıtı döndürme, sadece istek yap

// İsteği yap
curl_exec($ch);

// Hata kontrolü
if (curl_errno($ch)) {
   // echo 'cURL error: ' . curl_error($ch);
} else {
   // echo 'İstek başarıyla gerçekleştirildi!';
}

// cURL oturumunu kapat
curl_close($ch);





}


echo $addQuery ? 'successful' : 'unsuccessful';
