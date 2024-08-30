<?php
include('../islemler/baglan.php');
$db = new dbConnection();
$id = $_GET['id'];

if(isset($_GET['field'])){
    $deletePhotos = $db->getRows("SELECT * FROM tbimages WHERE image_id = $id");
    $deleteQuery = $db->query("DELETE FROM tbimages WHERE image_id = $id");
    foreach($deletePhotos as $delete){
        unlink('../../'.$delete['image_path']);
    }
    echo $deleteQuery ? 'successful' : 'unsuccessful';
    return;
}

$deleteQuery = $db->query("DELETE FROM tbproduct WHERE product_id = $id");
if($deleteQuery){
    $photos = $db->getRows("SELECT image_id, image_path FROM tbimages WHERE image_productid=$id");
    foreach ($photos as $item){
        unlink('../../'.$item['image_path']);
    }
    $db->query("DELETE FROM tbimages WHERE image_productid = $id");

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

    echo $deleteQuery ? 'successful' : 'unsuccessful';
}

