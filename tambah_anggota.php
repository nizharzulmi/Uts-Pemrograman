<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<div class="container">
	<h1><center> Tambah Data Anggota </h1></center>
	<li class="active"><a href="koneksi.php">Kembali</a></li>
	<form action="proses_tambah_anggota.php" method="post">
		Nama :  
		<center><input type="text" name="nama" value="" class="form-control"></center>
		Tanggal Lahir : 
		<center><input type="date" name="tanggal_lahir" value="" class="form-control"></center>
		Jenis Kelamin :
		<center><select name="jenis_kelamin" class="form-control">
			<option></option>
			<option value="L">Laki-laki</option>
			<option value="P">Perempuan</option>
		</select></center>
		Alamat : 
		<center><textarea name="alamat" value="" class="form-control"></textarea></center>
		Username :
		<center><input type="text" name="username" value="" class="form-control"></center>
			<option></option>
			<?php
			include "koneksi.php";
			$qry_barang=mysqli_query($conn,"select * from barang");
			while($data_barang=mysqli_fetch_array($qry_barang)){
	    echo '<option value="'.$data_barang['id_barang'].'">'.$data_barang['nama_barang'].'</option>';
			}
			?>
		</select></center>
		
		<br><center><input type="submit" name="simpan" value="Tambah Data" class="btn btn-primary"></center>
		<br>
	</form>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>