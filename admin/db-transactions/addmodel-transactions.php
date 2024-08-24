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

$addQuery = $db->query("INSERT INTO tbproduct(product_name, product_model, product_type, product_productionModule, product_designCategory, product_size, product_width,product_externalHeight, product_interiorHeight, product_weight, product_recommendedEngine, product_detail) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)", $productArray);
echo $addQuery ? 'successful' : 'unsuccessful';
