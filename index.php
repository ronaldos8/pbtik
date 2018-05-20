<?php
	session_start();
	require('function.php');

	$data['__pageTitle'] = "Dashboard";
	$data['__title'] = "Dashboard";
	$data['content'] = "ini konten";
	$content = "content/home.php";

	$data['v_active'] = 'dashboard';

	show($content, $data);
?>