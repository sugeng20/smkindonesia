<?php
	session_start();
	if(isset($_SESSION['username'])){
	   header("location:admin.php");		
	}
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Data Jurusan</h2>
		<hr>			
			<table border="1" cellpadding="5" cellspacing="0">
				<tr>
					<th>No</th>
					<th>Kode Jurusan</th>
					<th>Nama Jurusan</th>
				</tr>
				<?php
					$no=1;
					$sql = "SELECT * FROM jurusan";	
					$query = mysqli_query($db_link,$sql);
					while($data=mysqli_fetch_array($query)){	
					echo"
					<tr>
						<td>$no</td>
						<td>$data[kdjurusan]</td>
						<td>$data[namajurusan]</td>
					</tr>
					"; 
					$no++; } ?>				
			</table>
</body>
</html>