if(isset($_POST['adresayarguncelle'])){
$adresayarguncelle = $db->prepare("UPDATE ayar set
ayar_title = ?,
ayar_keyword = ?,
ayar_author = ?,
ayar_description = ?
where ayar_id = 1");

$adresayarok = $adresayarguncelle->execute([
$_POST['ayar_title'],
$_POST['ayar_keyword'],
$_POST['ayar_author'],
$_POST['ayar_description']
]);

if($adresayarok){
	Header("Location:../site-ayar.php?islem=successfuly&ayar_id=1");
	exit;
}
else{
	Header("Location:../site-ayar.php?islem=unsuccessfuly&ayar_id=1");
	exit;
}



}