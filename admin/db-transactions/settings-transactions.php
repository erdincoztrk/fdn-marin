<?php include('../islemler/baglan.php');
$db = new dbConnection();
$author = $_POST['author'];
$keyword = $_POST['keyword'];
$title = $_POST['title'];
$description = $_POST['description'];

$settingsArray = [$title, $author, $keyword, $title, $description];

$db->query("DELETE FROM tbsitesettings");
$addQuery = $db->query("INSERT INTO tbsitesettings(setting_name, setting_author, setting_keyword, setting_title, setting_description) VALUES(?, ?, ?, ?, ?) ", $settingsArray);
echo $addQuery ? 'successful' : 'unsuccesfull';