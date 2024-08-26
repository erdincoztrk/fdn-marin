<?php
include('../islemler/baglan.php');
$db = new dbConnection();
$description = $_POST['description'];
$id = $_GET['id'];

$addQuery = $db->query("UPDATE tbimages SET image_description = ? WHERE image_id = ?", [$description ,$id]);
echo $addQuery ? "successful" : "unsuccessful";
