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
	<h2>Data Nilai</h2>
		<hr>			
			<table border="1" cellpadding="5" cellspacing="0">
				<tr>
					<th>No</th>
					<th>Kode Nilai</th>
                    <th>NIS</th>
					<th>Kode Guru</th>
					<th>Kode Jurusan</th>
					<th>Kode Kelas</th>
                    <th>Kode MAPEL</th>
                    <th>UH</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>NA</th>
				</tr>
				<?php
					$no=1;
					$sql = "SELECT * FROM nilai";	
					$query = mysqli_query($db_link,$sql);
					while($data=mysqli_fetch_array($query)){	
					echo"
					<tr>
                        <td>$no</td>
                        <td>$data[kdnilai]</td>
                        <td>$data[nis]</td>
						<td>$data[kdguru]</td>
						<td>$data[kdjurusan]</td>
                        <td>$data[kdkelas]</td>
                        <td>$data[kdmapel]</td>
                        <td>$data[uh]</td>
                        <td>$data[uts]</td>
                        <td>$data[uas]</td>
                        <td>$data[na]</td>
					</tr>
					"; 
					$no++; } ?>				
			</table>
</body>
</html>