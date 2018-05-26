<?php
	require 'function.php';

	$data['__title'] = "Learn";
	$data['__pageTitle'] = "Materi";
	$content = "content/halamanmateri.php";

	$id = $_GET['id'];
	$sql = "SELECT * FROM materi WHERE id = $id";
	$hasil = mysqli_query($connect, $sql);    
    $data['materi'] = mysqli_fetch_array($hasil);

	$data['v_active'] = 'learn';
	show($content, $data);
?>