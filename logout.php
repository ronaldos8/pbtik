<?php require_once('function.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Logout</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div id="notif"></div>
	<!-- jQuery 3 -->
	<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src=".<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		// document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
		document.cookie = "log=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
		document.cookie = "level=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
		<?php session_start(); session_destroy(); ?>
		$('#notif').html("redirecting...");
		setTimeout(window.location.replace('<?php echo base_url('login.php'); ?>'), 30000);
	</script>	
</body>
</html>