<?php
	session_start();
	if(isset($_SESSION['username'])){
		include 'koneksi.php';
	}else{
	   header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Selamat Datang</h2>
	<hr>
	<p>Hai.. admin..</p>
</body>
</html>