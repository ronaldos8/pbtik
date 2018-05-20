<?php
	require_once('function.php');
	$data['__pageTitle'] = "Suggestion";
	$data['__title'] = "Suggestion";
	$content = "content/halamansuggestion.php";

	$data['v_active'] = 'suggestion';

	show($content, $data);
?>