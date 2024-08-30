<?php
include('../islemler/islem.php');
$db = new dbConnection();
$id = $_GET['id'];
$addQuery = $db->query("DELETE FROM tbmessages WHERE message_id = ?", [$id]);
echo $addQuery ? 'successful' : 'unsuccessful';
