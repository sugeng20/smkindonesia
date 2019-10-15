<?php
	session_start();
	if(isset($_SESSION['username'])){
	   header("location:admin.php");		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	
	<h2>Galeri</h2>
		<hr>
		<table>
			<tr>
				<td><img src="galeri/DSC_0646.JPG" width="160"></td>
				<td><img src="galeri/DSC_0653.JPG" width="160"></td>
				<td><img src="galeri/DSC_0716.JPG" width="160"></td>
			</tr>
			<tr>
				<td><img src="galeri/DSC_0735.JPG" width="160"></td>
				<td><img src="galeri/DSC_0736.JPG" width="160"></td>
				<td><img src="galeri/DSC_0753.JPG" width="160"></td>
			</tr>
			<tr>
				<td><img src="galeri/DSC_0754.JPG" width="160"></td>
				<td><img src="galeri/DSC_0631.JPG" width="160"></td>
				<td><img src="galeri/DSC_0636.JPG" width="160"></td>
			</tr>
		</table>
</body>
</html>