<?php
	function show($content, $data = NULL)
	{
		if ($data != NULL) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}
		$__head = file_get_contents('head.php');
		$__header = file_get_contents('header.php');
		$__sidebar = file_get_contents('sidebar.php');
		$__content = file_get_contents($content);
		$__footer = file_get_contents('footer.php');
		include "main.php";
	}
?>