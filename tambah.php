<?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD']=='POST'){
	//Mendapatkan Nilai Variable
	$name = $_POST['name'];
	$desg = $_POST['desg'];
	$sal = $_POST['salary'];
	//Pembuatan Syntax SQL
	$sql = "INSERT INTO tb_pegawai (nama,posisi,gajih) VALUES ('$name','$desg','$sal')";
	//Import File Koneksi database
	require_once('koneksi.php');
	//Eksekusi Query database
	if(isset($name)&&isset($desg)&&isset($sal)){
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Pegawai';
		}else{
			echo 'Gagal Menambahkan Pegawai, Koneksi Database Bermasalah';
		}
	}else{
		echo 'Gagal Menambahkan Pegawai, Data Kurang Lengkap';
	}
	mysqli_close($con);
}else{
	echo 'Pegawai API, Developed by Didin Studio';
}
?>