<?php
	function show($__content, $data = NULL)
	{
		if ($data != NULL) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}
		$__head = "head.php";
		$__header = 'header.php';
		$__sidebar = 'sidebar.php';
		$__footer = 'footer.php';
		include "main.php";
	}
?>