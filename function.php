<?php
	require_once('autoload.php');
	foreach ($autoload as $value) {
		require_once($value);
	}

	function show($__content, $data = NULL)
	{
		global $connect;

		isLogin();
		if ($data != NULL) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}
		
		$__head = 'head.php';
		$__header = 'header.php';
		$__sidebar = 'sidebar.php';
		$__footer = 'footer.php';
		include "main.php";
	}

	function base_url($path = '')
	{
		return "http://localhost/pbtik/$path";
	}

	function isLogin()
	{
		if (!isset($_COOKIE['log']) && $_COOKIE['log'] == false) {
			header('location: login.php');
		}else {
			$_SESSION = $_COOKIE;
		}
	}
?>