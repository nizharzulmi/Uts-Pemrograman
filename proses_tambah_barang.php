<?php
if($_POST){
	$nama_barang=$_POST['nama_barang'];
	$stok=$_POST['stok'];
	if(empty($nama_barang)) {
		echo "<script>alert('Nama Barang tidak boleh kosong');location.href='tambah_barang.php';</script>";

	} elseif(empty($stok)){
		echo "<script>alert('Stok tidak boleh kosong');location.href='tambah_barang.php';</script>";
	} else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into barang (nama_barang, stok) value ('".$nama_barang."','".$stok."')");
		if($insert){
			echo"<script>alert('Sukses menambah data barang');location.href='media.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan data barang');location.href='tambah_barang.php';</script>";
			
		}
	}
}
?>