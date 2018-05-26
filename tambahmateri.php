<?php
	require 'function.php';

	$data['__title'] = "Add Materi";
	$data['__pageTitle'] = "Add Materi";
	$content = "content/halamantambahmateri.php";

	$data['v_active'] = 'learn';
	show($content, $data);
?>