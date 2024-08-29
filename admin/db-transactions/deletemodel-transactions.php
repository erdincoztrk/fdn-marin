<?php
include('../islemler/baglan.php');
$db = new dbConnection();
$id = $_GET['id'];

if(isset($_GET['field'])){
    $deleteQuery = $db->query("DELETE FROM tbimages WHERE image_id = $id");
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
    echo 'successful';
}

