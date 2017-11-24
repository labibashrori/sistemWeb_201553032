<?php
if(isset($_GET['page'])) { //jika page tidak kosong
/*
	membuat kondisi ketika ada pemanggilan file
	menggunakan kata kunci page
*/
	switch ($_GET['page']) {
		case 'beranda' :	//jika page=beranda maka...
			require_once "beranda.php";
			break;
			
		case 'profil' :
			require_once "profil.php";
			break;
			
		case 'kontak' :
			require_once "kontak.php";
			break;
			
		case 'bantuan' :
			require_once "bantuan.php";
			break;
	}
	
}else {	//jika page kosong
	require_once "beranda.php";
}
?>