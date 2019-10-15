<?php
	session_start();
	if(isset($_SESSION['username'])){
		include '../koneksi.php';
	}else{
	   header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Manajemen Guru</h2>
      <hr>
      <center><input type="button" value="Tambah Data" onclick="location.href='tambahguru.php'"></center>
      <br>
		<table border='1' cellspacing="0" cellpadding='5'>
		<tr>
			<td>No</td>
			<td>Kode</td>
		    <td>NIP</td>						
	    	<td>Nama Guru</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Aksi</td>
		</tr>
		<?php
			$no=1;
			$sql="SELECT * FROM guru";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
					<td><?php echo "$no"; ?></td>
					<td><?php echo "$data[kdguru]"; ?></td>
					<td><?php echo "$data[nip]"; ?></td>
                    <td><?php echo "$data[namaguru]"; ?></td>
                    <td><?php echo "$data[alamat]"; ?></td>
                    <td><?php echo "$data[jk]"; ?></td>	
					<td>
						<a href="editguru.php?id=<?php echo "$data[kdguru]"; ?>">EDIT</a> |
						<a href="hapusguru.php?id=<?php echo "$data[kdguru]"; ?>" onclick="return confirm('Anda yakin?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</body>
</html>