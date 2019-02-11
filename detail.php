<?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD']=='GET'){
	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id = $_GET['id'];
	if (isset($id)){
		//Importing database
		require_once('koneksi.php');
		//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
		$sql = "SELECT * FROM tb_pegawai WHERE id=$id";
		//Mendapatkan Hasil 
		$r = mysqli_query($con,$sql);
		//Memasukkan Hasil Kedalam Array
		$result = array();
		$row = mysqli_fetch_array($r);
		array_push($result,array(
			"id"=>$row['id'],
			"name"=>$row['nama'],
			"desg"=>$row['posisi'],
			"salary"=>$row['gajih']
		));
		//Menampilkan dalam format JSON
		echo json_encode(array('result'=>$result));
		mysqli_close($con);
	}else{
		echo 'Gagal Menampilkan Data Pegawai, ID Pegawai Tidak Ditemukan';	
	}
}else{
	echo 'Pegawai API, Developed by Didin Studio';
}
?>