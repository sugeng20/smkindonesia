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
	<h2>Data Siswa</h2>
		<hr>			
			<table border="1" cellpadding="5" cellspacing="0">
				<tr>
					<th>No</th>
					<th>NIS</th>
					<th>Nama Siswa</th>
					<th>Alamat</th>
					<th>JK</th>
				</tr>
				<?php
					$no=1;
					$sql = "SELECT * FROM siswa";	
					$query = mysqli_query($db_link,$sql);
					while($data=mysqli_fetch_array($query)){	
					echo"
					<tr>
						<td>$no</td>
						<td>$data[nis]</td>
						<td>$data[namasiswa]</td>
						<td>$data[alamat]</td>
						<td>$data[jk]</td>
					</tr>
					"; 
					$no++; } ?>				
			</table>
</body>
</html>