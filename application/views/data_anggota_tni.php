<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>TABEL ANGGOTA TNI</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>

<div class="container">
	<h1>TABEL ANGGOTA TNI</h1>

	<a href="data/add" class="btn btn-primary">Tambah Data Anggota TNI</a>
	<a href="users/index" class="btn btn-primary">Setting User</a>

	<table class="table tabel_anggota" id="">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Anggota</th>
				<th>Pangkat</th>
				<th>Korps</th>
				<th>NRP</th>
				<th>Matra</th>
				<th>Kesatuan</th>
				<th>Jabatan</th>
				<th>Alamat</th>
				<th>Email</th>	
							
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($list_anggota_tni as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[name]</td>
					<td>$row[pangkat]</td>
					<td>$row[korps]</td>
					<td>$row[nrp]</td>
					<td>$row[matra]</td>
					<td>$row[kesatuan]</td>
					<td>$row[jabatan]</td>
					<td>$row[alamat]</td>
					<td>$row[email]</td>
					<td>
						<a href='data/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
						<a href='data/delete/$row[id]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</div>
	<script>
	$(document).ready( function () {
	$('.tabel_anggota').DataTable();
	} );
	</script>	
</body>
</html>
