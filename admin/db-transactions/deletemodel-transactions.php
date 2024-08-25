<?php
include('../islemler/baglan.php');
$db = new dbConnection();
$id = $_GET['id'];
$deleteQuery = $db->query("DELETE FROM tbproduct WHERE product_id = $id");
if($deleteQuery){
    $db->query("DELETE FROM tbimages WHERE image_productid = $id");
    echo 'successful';
}