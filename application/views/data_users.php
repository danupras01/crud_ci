<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>TABEL Users</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>

<div class="container">
	<h1>TABEL Users</h1>

	<a href="users/add" class="btn btn-primary">Tambah User</a>
	<!-- <a href="users/index" class="btn btn-primary">Setting User</a> --> 

	<table class="table users" id="">
		<thead>
			<tr>
				<th>#</th>
				<th>Username</th>
				<th>Password</th>
			<!-- 	<th>Korps</th>
				<th>NRP</th>
				<th>Matra</th>
				<th>Kesatuan</th>
				<th>Jabatan</th>
				<th>Alamat</th>
				<th>Email</th>	 -->
							
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($list_users as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[username]</td>
					<td>$row[password]</td>
					<td>
						<a href='users/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
						<a href='users/delete/$row[id]' class='btn btn-sm btn-danger'>Hapus</a>
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
	$('.users').DataTable();
	} );
	</script>	
</body>
</html>
