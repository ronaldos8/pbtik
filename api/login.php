<?php
	require_once('../function.php');

	function cekLogin()
	{
		global $connect;

		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$q = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
		$res = mysqli_query($connect, $q);
		if (mysqli_num_rows($res) > 0) {
			$data = mysqli_fetch_assoc($res);
			$response = [
				'success' => true,
			    'data' => $data,
			    'code' => '00'
			];
		}else {
			$response = [
				'success' => false,
			    'data' => 'login gagal',
			    'code' => '200'
			];
		}

		echo json_encode($response);
	}

	$method = $_GET['method'];
	$method();
?>