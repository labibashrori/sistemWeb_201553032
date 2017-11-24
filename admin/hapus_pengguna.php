<?php
	require_once "../koneksi.php";

	$sql_hapus = "Delete from tbuser where email='".$_GET['id']."'";
	$query_hapus = mysql_query($sql_hapus) or die (mysql_error());

		if($query_hapus) {
			echo "<div class='alert-success'>
					<a href='?page=tampil_pengguna' class='close' data-dismiss='alert'>&times;</a>
						Hapus berhasil
						</div>";
			echo "<meta http-equiv='refresh' content='0;url=?page=tampil_pengguna'>";
		}else{
			echo"<script>alert('Hapus gagal !')</script>";
		}
?>