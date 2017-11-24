<!doctype html>
<html lang="id">
	<head>
		
		<meta charset="utf-8" />
		
		<meta http-equiv="X-UA-Compatible" contens="IE=edge" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		
		<title>Login Admin</title>
		<meta name="Description" content="deksripsi halaman ini"/>
		<meta name="Keywords" content="keyword1, keyword2, ..."/>
		
		
		<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/web-temaku.css"/>		
	</head>

	<body>
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-4 col-md-offset-4">
					
					<form name="frmLogin" method="post">
						<h1 style="text-align: center;">ADMINISRATOR</h1>
						<div class="form-group">
							<input type="text" name="txtEmail" class="form-control" placeholder="email" />
						</div>
						<div class="form-group">
							<input type="password" name="Password" class="form-control" placeholder="password" />
						</div>
						<div class="form-group">
							<button class="btn btn-lg btn-primary btn-block" name="btnLogin" type="submit">LOGIN</button>
						</div>
					</form>
				</div>
			</div>
		</div>


		<script src="../bootstrap-3.3.7-dist/jquery-3.2.1.min.js"></script>
		<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</body>
</html>

<?php
	require_once "../koneksi.php";

	if (isset($_POST['btnLogin'])) {
		$sql= mysql_query("SELECT * FROM tbuser where email='".$_POST['txtEmail']."'
			AND password='".$_POST['Password']."'") or die (mysql_error());
		$cek=mysql_num_rows($sql);
		$data=mysql_fetch_array($sql);

		if ($cek >=1 ){
			echo "<meta http-equiv='refresh' content='0; url=../admin/index.php'>";
		} else {
			echo "
			<div align='center'>
			<font colo='red'> Login Gagal !!! </font>
			</div>
			";
		}
	}
?>