<?php
include('../islemler/baglan.php');
$db = new dbConnection();
$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$mail = htmlspecialchars($_POST['mail']);
$phone = htmlspecialchars($_POST['phone']);
$detail = htmlspecialchars($_POST['detail']);
$messageArray = [$name, $surname, $mail, $phone, $detail];

$addQuery = $db->query("INSERT INTO tbmessages(message_name, message_surname, message_mail, message_phone, message_detail) VALUES(?,?,?,?,?)", $messageArray);
echo $addQuery ? 'successful' : 'unsuccessful';