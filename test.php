<?php
	require_once('function.php');
	$data['__pageTitle'] = "Test";
	$data['__title'] = "Test";
	$content = "content/halamantest.php";

	$data['v_active'] = 'test';

	show($content, $data);
?>