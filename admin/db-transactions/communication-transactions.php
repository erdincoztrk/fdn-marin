<?php include('../islemler/baglan.php');
$db = new dbConnection();
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];
$sahibinden = $_POST['sahibinden'];
$city = $_POST['city'];
$distinct = $_POST['distinct'];
$adress = $_POST['adress'];
$googleMap = $_POST['googleMap'];

$commArray = [$tel, $instagram, $facebook, $sahibinden, $city, $distinct, $adress, $googleMap, $mail];

$db->query("DELETE FROM tbcommunication");
$addQuery = $db->query("INSERT INTO tbcommunication (comm_tel, comm_instagram, comm_facebook, comm_sahibinden, comm_city, comm_distinct, comm_adress, comm_googlemap, comm_mail) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)", $commArray);
echo $addQuery ? 'successful' : 'unsuccessful';