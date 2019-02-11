<?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD']=='POST'){
	//Mendapatkan Nilai Variable
	$id = $_POST['id'];
	$name = $_POST['name'];
	$desg = $_POST['desg'];
	$sal = $_POST['salary'];
	//Pembuatan Syntax SQL
	$sql = "UPDATE tb_pegawai SET nama = '$name', posisi = '$desg', gajih = '$sal' WHERE id = $id;";
	//Import File Koneksi database
	require_once('koneksi.php');
	//Eksekusi Query database
	if(isset($id)){
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Mengubah Data Pegawai';
		}else{
			echo 'Gagal Mengubah Data Pegawai, Koneksi Database Bermasalah';
		}
	}else{
		echo 'Gagal Mengubah Data Pegawai, ID Pegawai Tidak Ditemukan';
	}
	mysqli_close($con);
}else{
	echo 'Pegawai API, Developed by Didin Studio';
}
?>