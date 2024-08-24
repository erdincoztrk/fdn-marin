<?php
include('../islemler/baglan.php');
$db = new dbConnection();
$siteName = $_POST['siteName'];
$foundationDate = $_POST['foundationDate'];
$aboutUs = $_POST['aboutUs'];
$aboutusArray = [$siteName, $foundationDate, $aboutUs];
$db->query("DELETE FROM tbaboutus");
$addQuery = $db->query("INSERT INTO tbaboutus(about_siteName, about_foundationDate, about_us) VALUES(?,?,?)", $aboutusArray);
if($addQuery){
    echo 'successful';
}
else{
    echo 'unseccessful';
}
