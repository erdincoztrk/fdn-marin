<?php
include('../islemler/islem.php');
$db = new dbConnection();
$mail = $_POST['admin_mail'];
$password = $_POST['admin_password'];
$getAdmin = $db->getRow("SELECT * FROM tbadmin WHERE admin_mail = '{$mail}' AND admin_password = '{$password}'");
if($getAdmin){
    $_SESSION['session'] = true;
    $_SESSION['user'] = $getAdmin['admin_username'];
    $_SESSION['id'] = $getAdmin['admin_id'];
    echo 'successful';
}else{
    echo 'unsuccessful';
}

