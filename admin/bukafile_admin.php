<?php
if(isset($_GET['page'])) { //jika page tidak kosong
/*
	membuat kondisi ketika ada pemanggilan file
	menggunakan kata kunci page
*/
	switch ($_GET['page']) {
		case 'tampil_pengguna' : //jika page=beranda maka...
			require_once "tampil_pengguna.php";
			break;
			
		case 'hapus_pengguna' :
			require_once "hapus_pengguna.php";
			break;
	}
}
?>