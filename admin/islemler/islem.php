<?php 
include 'baglan.php';
include 'fonksiyon.php';


// ADMİN LOGİN İŞLEMİ--------------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['admin_login'])){

$password = md5($_POST['admin_password']);
$adminlogin = $db->prepare("SELECT * FROM admin where admin_email = ? and admin_password=? and admin_rutbe = ?");
$adminlogin->execute([
$_POST['admin_mail'],
$password,
"Kurucu"
]);
$adminloginok = $adminlogin -> fetch(PDO::FETCH_ASSOC);

if($adminloginok){
	ob_start();
session_start();
	$_SESSION['admin_id'] = $adminloginok['admin_id'];
	header("Location:../homepage.php");
	exit;
}
else{
	header("Location:../index.php?girisbasarisiz");
	exit;
}
}
// ADMİN LOGİN İŞLEMİ BİTİŞ---------------------------------------------------------------------------------------------------------------------------------



// ADMİN LOGOUT İŞLEMİ--------------------------------------------------------------------------------------------------------------------------------------
if(isset($_GET['logout'])){
	ob_start();
	session_start();
	session_destroy();
	Header("Location:../index.php?logout");
	exit;

}
// ADMİN LOGOUT İŞLEMİ BİTİŞ--------------------------------------------------------------------------------------------------------------------------------



// ADMİN PROFİL DÜZENLEME-----------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['adminduzenle'])){
	$adminduzenle = $db->prepare("UPDATE admin SET admin_ad=?, admin_soyad=?, admin_email=? where admin_id=?");
	$adminupdate = $adminduzenle->execute([
		$_POST['admin_ad'],
		$_POST['admin_soyad'],
		$_POST['admin_email'],
		$_POST['admin_id']
	]);
	if($adminupdate){
		Header("Location:../profil.php?islem=successfuly");
	exit;
	}
	else{
		Header("Location:../profil.php?islem=unsuccessfuly");
	exit;
	}


}

// ADMİN PROFİL DÜZENLEME BİTİŞ-----------------------------------------------------------------------------------------------------------------------------



// ADMİN ŞİFRE GÜNCELLEME-----------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['sifreduzenle'])){
	$oldpassword = md5($_POST['mevcutsifre']);
	$newpassword = md5($_POST['yenisifre']);
	$newpasswordagain = md5($_POST['yenisifre_tekrar']);
	// MEVCUT ŞİFRE DOĞRULUK SORGUSU
	$sifrevarmi = $db->prepare("SELECT * FROM admin where admin_password = ? and admin_id = ?");
	$sifrevarmi -> execute([$oldpassword, $_POST['admin_id']]);
	$sifrekontrol = $sifrevarmi -> rowCount();
	// MEVCUT ŞİFRE DOĞRUYSA
	if($sifrekontrol != 0){
		// ESKİ ŞİFRE VE YENİ ŞİFRE ÇAKIŞMAZSA
		if($oldpassword != $newpassword){
			// YENİ ŞİFRE VE ŞİFRE TEKRARI AYNI İSE ŞİFREYİ GÜNCELLE
		if($newpassword == $newpasswordagain){
			$sifreguncelle = $db->prepare("UPDATE admin SET admin_password = ? where admin_id = ?");
			$passwordupdate = $sifreguncelle -> execute([$newpassword, $_POST['admin_id']]);
			if($passwordupdate){
				Header("Location:../profil-sifre.php?sifreguncellendi");
				exit;
			}
			else{
				Header("Location:../profil-sifre.php?sifreguncellenmedi");
				exit;
			}
		}
		// YENİ ŞİFRELERİN İKİSİ DE AYNI DEĞİL İSE
		else{
			Header("Location:../profil-sifre.php?yenisifrelerhatali");
			exit;	
		}
	}
	// MEVCUT ŞİFRE VE YENİ ŞİFRE AYNI İSE
	else{
		Header("Location:../profil-sifre.php?mevcut-sifre-ve-yeni-sifre-ayni");
		exit();
	}


// MEVCUT ŞİFRE HATALI GİRİLİRSE
	}
	else{
		Header("Location:../profil-sifre.php?mevcutsifrehatali");
		exit;
	}

}


// ADMİN ŞİFRE GÜNCELLEME BİTİŞ-----------------------------------------------------------------------------------------------------------------------------



// GENEL AYAR GÜNCELLEME İŞLEMİ------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['genelayarguncelle'])){
$genelayarguncelle = $db->prepare("UPDATE ayar set
ayar_title = ?,
ayar_keyword = ?,
ayar_author = ?,
ayar_description = ?
where ayar_id = 1");

$genelayarok = $genelayarguncelle->execute([
$_POST['ayar_title'],
$_POST['ayar_keyword'],
$_POST['ayar_author'],
$_POST['ayar_description']
]);

if($genelayarok){
	Header("Location:../site-ayar.php?islem=successfuly&ayar_id=1");
	exit;
}
else{
	Header("Location:../site-ayar.php?islem=unsuccessfuly&ayar_id=1");
	exit;
}



}
// GENEL AYAR GÜNCELLEME İŞLEMİ BİTİŞ----------------------------------------------------------------------------------------------------------------------------------



// İLETİŞİM AYAR GÜNCELLEME İŞLEMİ----------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['iletisimayarguncelle'])){
$iletisimayarguncelle = $db->prepare("UPDATE ayar set
ayar_gsm = ?,
ayar_mail = ?,
ayar_linkedin = ?,
ayar_github = ?,
ayar_twitter = ?,
ayar_instagram = ?
where ayar_id = 1");

$iletisimayarok = $iletisimayarguncelle->execute([
$_POST['ayar_gsm'],
$_POST['ayar_mail'],
$_POST['ayar_linkedin'],
$_POST['ayar_github'],
$_POST['ayar_twitter'],
$_POST['ayar_instagram']
]);

if($iletisimayarok){
	Header("Location:../iletisim-ayar.php?islem=successfuly&ayar_id=1");
	exit;
}
else{
	Header("Location:../iletisim-ayar.php?islem=unsuccessfuly&ayar_id=1");
	exit;
}



}
// İLETİŞİM AYAR GÜNCELLEME İŞLEMİ BİTİŞ----------------------------------------------------------------------------------------------------------------------------------



// ADRES AYAR GÜNCELLEME İŞLEMİ----------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['adresayarguncelle'])){
$adresayarguncelle = $db->prepare("UPDATE ayar set
ayar_il = ?,
ayar_ilce = ?,
ayar_adres = ?

where ayar_id = 1");

$adresayarok = $adresayarguncelle->execute([
$_POST['ayar_il'],
$_POST['ayar_ilce'],
$_POST['ayar_adres']
]);

if($adresayarok){
	Header("Location:../adres-ayar.php?islem=successfuly&ayar_id=1");
	exit;
}
else{
	Header("Location:../adres-ayar.php?islem=unsuccessfuly&ayar_id=1");
	exit;
}
}
// ADRES AYAR GÜNCELLEME İŞLEMİ BİTİŞ----------------------------------------------------------------------------------------------------------------------------------



// PROJE EKLEME İŞLEMİ----------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['yetenekekle'])){
	$yetenekekle = $db->prepare("INSERT INTO yetenek set
		yetenek_ad = ?,
		yetenek_seviye = ?
		");
	$yetenekekleok = $yetenekekle->execute([$_POST['yetenek_ad'], $_POST['yetenek_seviye']]);
	if($yetenekekleok){
		Header("Location:../yetenekler.php?islem=successfuly");
	exit;
	}
	else{
		Header("Location:../yetenekler.php?islem=unsuccessfuly");
	exit;
	}
}
// PROJE EKLEME İŞLEMİ BİTİŞ----------------------------------------------------------------------------------------------------------------------------------



// YETENEK GÜNCELLEME İŞLEMİ GÜNCELLEME İŞLEMİ BAŞLANGIÇ----------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['yetenekguncelle'])){
	$yetenekduzenle = $db->prepare("UPDATE yetenek SET yetenek_ad = ?, yetenek_seviye = ? where yetenek_id = ?");
	$yetenekduzenleok = $yetenekduzenle->execute([$_POST['yetenek_ad'],$_POST['yetenek_seviye'],$_POST['yetenek_id']]);
	if($yetenekduzenleok){
		Header("Location:../yetenek-duzenle.php?islem=successfuly&yetenekid=".$_POST['yetenek_id']);
	exit;
	}
	else{
		Header("Location:../yetenek-duzenle.php?islem=unsuccessfuly&yetenekid=".$_POST['yetenek_id']);
	exit;
	}
}
// YETENEK GÜNCELLEME İŞLEMİ GÜNCELLEME İŞLEMİ BİTİŞ----------------------------------------------------------------------------------------------------------------------------------



// YETENEK SİLME İŞLEMİ BAŞLANGIÇ// YETENEK SİLME İŞLEMİ GÜNCELLEME İŞLEMİ BAŞLANGIÇ----------------------------------------------------------------------------------------------------------------------------------
if(isset($_GET['yeteneksil'])){
	$yeteneksil = $db->prepare("DELETE FROM yetenek where yetenek_id=?");
	$yeteneksilok = $yeteneksil->execute([$_GET['yeteneksil']]);
	if($yeteneksilok){
		Header("Location:../yetenekler.php?islem=successfuly");
	exit;
	}
	else{
		Header("Location:../yetenekler.php?islem=unsuccessfuly");
	exit;
	}
}
// YETENEK SİLME İŞLEMİ BAŞLANGIÇ// YETENEK SİLME İŞLEMİ GÜNCELLEME İŞLEMİ BİTİŞ----------------------------------------------------------------------------------------------------------------------------------



// SERTİFİKA EKLEME İŞLEMİ----------------------------------------------------------------------------------------------------------------------
if(isset($_POST['sertifikaekle'])){
	// FOTOĞRAFI DOSYAYA GÖNDERME
		$uploads_dir = '../../images/sertifikalar';

	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
	@$name = $_FILES['ayar_logo']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");
	// VERİ TABANI İŞLEMLERİ
	$sertifikaekle = $db->prepare("INSERT INTO sertifika set 
		sertifika_ad = ?,
		sertifika_tarih = ?,
		sertifika_detay = ?,
		sertifika_fotograf = ?
		");
	$sertifiakainsert = $sertifikaekle->execute([
		$_POST['sertifika_ad'],
		$_POST['sertifika_tarih'],
		$_POST['sertifika_detay'],
		$refimgyol
	]);
	if($sertifiakainsert){
		header("Location:../sertifika-ekle.php?islem=successfuly");
		exit;
	}
	else{
		header("Location:../sertifika-ekle.php?islem=unsuccessfuly");
		exit;
	}

}
// SERTİFİKA EKLEME İŞLEMİ BİTİŞ-------------------------------------------------------------------------------------------------------------



// SERTİFİKA BİLGİ DÜZENLEME İŞLEMİ----------------------------------------------------------------------------------------------------------------
if(isset($_POST['sertifikaduzenle'])){
	$sertifika_bduzenle = $db->prepare("UPDATE sertifika SET
		sertifika_ad = ?,
		sertifika_tarih = ?,
		sertifika_detay = ?
		where sertifika_id=?
	 ");
	$sertifika_bupdate = $sertifika_bduzenle->execute([
		$_POST['sertifika_ad'],
		$_POST['sertifika_tarih'],
		$_POST['sertifika_detay'],
		$_POST['sertifika_id']
	]);
	if($sertifika_bupdate){
		header("Location:../sertifika-duzenle.php?islem=successfuly&sertifikaid=".$_POST['sertifika_id']);
		exit;
	}
	else{
		header("Location:../sertifika-duzenle.php?islem=unsuccessfuly&sertifikaid=".$_POST['sertifika_id']);
		exit;
	}
}
// SERTİFİKA FOTOĞRAF DÜZENLEME İŞLEMİ-----------------------------------------------------------------------------------------------------
if(isset($_POST['sertifikafotograf'])){

	$uploads_dir = '../../images/sertifikalar';

	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
	@$name = $_FILES['ayar_logo']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	$sertifikafoto_g = $db->prepare("UPDATE sertifika set sertifika_fotograf = ? where sertifika_id = ?");
	$sertifikafoto_gok=$sertifikafoto_g->execute([$refimgyol, $_POST['sertifika_id']]);
	if($sertifikafoto_gok){
			$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");
		header("Location:../sertifika-duzenle.php?fotoislem=successfuly&sertifikaid=".$_POST['sertifika_id']);
		exit;
	}
	else{
		header("Location:../sertifika-duzenle.php?fotoislem=unsuccessfuly&sertifikaid=".$_POST['sertifika_id']);
		exit;
	}

}
// SERTİFİKA DÜZENLEME İŞLEMİ BİTİŞ-----------------------------------------------------------------------------------------------------------



// HAKKIMDA BİLGİ DÜZENLEME İŞLEMİ------------------------------------------------------------------------------------------------------------
if(isset($_POST['hakkimdaduzenle'])){
$hakkimdaguncelle = $db->prepare("UPDATE hakkimda SET
	hakkimda_benkimim = ?,
	hakkimda_dtarih = ?,
	hakkimda_hedef = ?,
	hakkimda_uni = ?,
	hakkimda_lise = ?,
	hakkimda_hobi = ?
	where hakkimda_id=? 
	");
$hakkimdaupdate = $hakkimdaguncelle->execute([
$_POST['hakkimda_benkimim'],
$_POST['hakkimda_dtarih'],
$_POST['hakkimda_hedef'],
$_POST['hakkimda_uni'],
$_POST['hakkimda_lise'],
$_POST['hakkimda_hobi'],
$_POST['hakkimda_id']
]);

if($hakkimdaupdate){
	header("Location:../hakkimda.php?islem=successfuly");
		exit;
}
else{
	header("Location:../hakkimda.php?islem=unsuccessfuly");
		exit;
}

}
// HAKKIMDA BİLGİ DÜZENLEME BİTİŞ---------------------------------------------------------------------------------------------------------------



// YAZILIM DİLİ EKLEME İŞLEMİ-------------------------------------------------------------------------------------------------------------------
if(isset($_POST['dilekle'])){
	$dilekle = $db->prepare("INSERT INTO diller set dil_ad = ?, dil_sayi = ?");
	$dilok = $dilekle->execute([$_POST['dil_ad'], 0]);
	if($dilok){
		header("Location:../yazilim-dilleri.php?islem=successfuly");
		exit;
	}
	else{
		header("Location:../yazilim-dilleri.php?islem=unsuccessfuly");
		exit;
	}
}
// YAZILIM DİLİ EKLEME BİTİŞ-----------------------------------------------------------------------------------------------------------------------



// SOLUTION EKLEME İŞLEMİ--------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['solutionekle'])){
	// SOLUTION SEO EKLEME
	$solutionseo = seo($_POST['solution_name']);

	// SOLUTION KEYS EKLEME	
	$dizile = explode("-", $solutionseo);
	$birlestir = implode(", ", $dizile);

	$solutionname = $_POST['solution_name'];
	$solutionlanguage =$_POST['solution_language'];
	$solutiondetail = $_POST['solution_detail'];

	$cozumekle = $db->prepare("INSERT INTO solutions set solution_name = ?, solution_language = ?, solution_detail = ?, solution_seo = ?, solution_keys = ?");
	$solutionadd = $cozumekle -> execute([$solutionname, $solutionlanguage, $solutiondetail, $solutionseo, $birlestir]);
	if($solutionadd){
			$dilcek = $db->prepare("SELECT * from diller where dil_ad = ?");
			$dilcek->execute([$solutionlanguage]);
			$dilcekk = $dilcek -> fetch(PDO::FETCH_ASSOC);
			$dilsayi = $dilcekk['dil_sayi'] + 1;
			$dilarttir = $db->prepare("UPDATE diller set dil_sayi = ? where dil_ad = ?");
			$dilarttir->execute([$dilsayi, $solutionlanguage]);
		header("Location:../model-ekle.php?islem=successfuly");
		exit;
	}
	else{
		header("Location:../model-ekle.php?islem=unsuccessfuly");
		exit;
	}
}
// SOLUTION EKLEME İŞLEMİ BİTİŞ----------------------------------------------------------------------------------------------------------------------



// SOLUTION DÜZENLEME İŞLEMİ-------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['solutionduzenle'])){
	// SOLUTION SEO EKLEME
	$solutionseo = seo($_POST['solution_name']);

	// SOLUTION KEYS EKLEME	
	$dizile = explode("-", $solutionseo);
	$birlestir = implode(", ", $dizile);

	$solutionname = $_POST['solution_name'];
	$solutionlanguage = $_POST['solution_language'];
	$solutiondetail = $_POST['solution_detail'];
	$duzenle = $db->prepare("UPDATE solutions SET solution_name = ?, solution_language = ?, solution_detail = ?, solution_seo = ?, solution_keys = ? WHERE solution_id = ?");
	$sduzenle = $duzenle->execute([$solutionname, $solutionlanguage, $solutiondetail, $solutionseo, $birlestir, $_POST['solution_id']]);

	if($sduzenle){

	// ESKİ DİL SAYI DÜŞÜRME
	$eskidil = $_POST['eskidil'];
	$dilsayigetir = $db->prepare("SELECT * FROM diller where dil_ad = ?");
	$dilsayigetir->execute([$eskidil]);
	$dilsayi = $dilsayigetir->fetch(PDO::FETCH_ASSOC);
	$dilsayidusur = $dilsayi['dil_sayi'] - 1;
	$dilsayidusurupdate = $db->prepare("UPDATE diller set dil_sayi = ? where dil_ad = ?");
	$dilsayidusurupdate -> execute([$dilsayidusur,$eskidil]);
	// İŞLEM BİTİŞ

	// YENİ DİL SAYI ARTTIRMA
			$dilcek = $db->prepare("SELECT dil_sayi from diller where dil_ad = ?");
			$dilcek->execute([$solutionlanguage]);
			$dilcekk = $dilcek -> fetch(PDO::FETCH_ASSOC);
			$dilsayi = $dilcekk['dil_sayi'] + 1;
			$dilarttir = $db->prepare("UPDATE diller set dil_sayi = ? where dil_ad = ?");
			$dilarttir->execute([$dilsayi, $solutionlanguage]);

		header("Location:../model-duzenle.php?islem=successfuly&solutionid=".$_POST['solution_id']);
		exit;
	}
	else{
		header("Location:../model-duzenle.php?islem=unsuccessfuly&solutionid=".$_POST['solution_id']);
		exit;
	}
}
// SOLUTION UPDATE İŞLEMİ BİTİŞ--------------------------------------------------------------------------------------------------------------------



// SOLUTION SİLME----------------------------------------------------------------------------------------------------------------------------------
if(isset($_GET['solutionsil'])){
$solutions = $db->prepare("SELECT * FROM solutions where solution_id = ?");
$solutions->execute([$_GET['solutionsil']]);
$solutionad = $solutions -> fetch(PDO::FETCH_ASSOC);

$solutionsil = $db->prepare("DELETE FROM solutions where solution_id = ?");
$deletesolution = $solutionsil->execute([$_GET['solutionsil']]);
if($deletesolution){
	// DİL SAYISI DÜŞÜRME
	$dileksilt = $db->prepare("SELECT * FROM diller where dil_ad = ?");
	$dileksilt->execute([$solutionad['solution_language']]);
	$dilbul=$dileksilt->fetch(PDO::FETCH_ASSOC);
	$dileksiltmek = $dilbul['dil_sayi'] - 1;
	$eksiltmeguncelle = $db->prepare("UPDATE diller set dil_sayi = ? where dil_ad = ?");
	$eksiltmeguncelle->execute([$dileksiltmek, $solutionad['solution_language']]);
	header("Location:../model-listele.php?islem=successfuly");
		exit;
}
else{
	header("Location:../model-listele.php?islem=unsuccessfuly");
		exit;
}

}
// SOLUTION SİLME BİTİŞ----------------------------------------------------------------------------------------------------------------------------


 ?>