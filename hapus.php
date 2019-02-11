<?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD']=='GET'){
	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id = $_GET['id'];
	//Importing database
	require_once('koneksi.php');
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "DELETE FROM tb_pegawai WHERE id=$id;";
	//Import File Koneksi database
	require_once('koneksi.php');
	//Eksekusi Query database
	if(isset($id)){
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menghapus Data Pegawai';
		}else{
			echo 'Gagal Menghapus Data Pegawai, Koneksi Database Bermasalah';
		}
	}else{
		echo 'Gagal Menghapus Data Pegawai, ID Pegawai Tidak Ditemukan';
	}
	mysqli_close($con);
}else{
	echo 'Pegawai API, Developed by Didin Studio';
}
?>