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
	<h2>Data Mengajar</h2>
		<hr>			
			<table border="1" cellpadding="5" cellspacing="0">
				<tr>
					<th>No</th>
					<th>Kode Mengajar</th>
					<th>Kode Guru</th>
					<th>Kode Jurusan</th>
					<th>Kode Kelas</th>
                    <th>Kode MAPEL</th>
				</tr>
				<?php
					$no=1;
					$sql = "SELECT * FROM mengajar";	
					$query = mysqli_query($db_link,$sql);
					while($data=mysqli_fetch_array($query)){	
					echo"
					<tr>
						<td>$no</td>
						<td>$data[kdmengajar]</td>
						<td>$data[kdguru]</td>
						<td>$data[kdjurusan]</td>
                        <td>$data[kdkelas]</td>
                        <td>$data[kdmapel]</td>
					</tr>
					"; 
					$no++; } ?>				
			</table>
</body>
</html>