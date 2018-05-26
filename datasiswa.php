<?php
	require 'function.php';

	$data['__title'] = "Data Siswa";
	$data['__pageTitle'] = "Data Siswa";
	$content = "content/halamandatasiswa.php";

	/*$id = $_GET['id'];
	$sql = "SELECT * FROM materi WHERE id = $id";
	$hasil = mysqli_query($connect, $sql);    
    $data['materi'] = mysqli_fetch_array($hasil);*/

	$data['v_active'] = 'datasiswa';
	show($content, $data);
?>