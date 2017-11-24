<!doctype html>
<html lang="id">
	<head>
		<title>Halaman Pengguna</title>
	</head>
	
	<body>
		<div class="col-sm-9">
			
			<h1 style="text-align: center;">Data Pengguna</h1>
			<div style="text-align: left;">
				<a href="#" class="btn btn-primary btn-sm">Tambah</a>
			</div>
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Jekel</th>
							<th>Alamat</th>
							<th>No. Hp</th>
							<th>Foto</th>
							<th>Kelola</th>
						</tr>
					</thead>
					<tbody>
						<?php
							require_once "../koneksi.php";
						
							$sql = mysql_query("Select * from tbuser")
								or die(mysql_error());
						
							$no=1;
							while ($data = mysql_fetch_array($sql)) {
						?>	
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['jekel']; ?></td>
							<td><?php echo $data['alamat']; ?></td>
							<td><?php echo $data['hp']; ?></td>
							<td><?php echo $data['foto']; ?></td>
							<td>
								<a href="#" class="btn btn-info btn-sm">Ubah</a>
								<a href="?page=hapus_pengguna&id=<?php echo $data['email']; ?>" 
                        onclick="return confirm('Yakin menghapus data ini?');" class="btn btn-warning btn-sm">Hapus</a>
							</td>
						</tr>
							<?php
								$no++;
								}
							?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>