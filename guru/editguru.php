<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h2>Edit - Manajemen Guru</h2>
    <hr>
    <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM guru WHERE kdguru ='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
    <form action='aksi_edit_guru.php?id=<?php echo "$id"; ?>' method='POST'>
        <table border="0">
            <tr>
                <td>Kode Guru</td>
                <td><input name='kguru' type='text' id="kguru" value="<?php echo $data['kdguru'] ?>" disabled></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td><input name='nip' type='text' id="nip" value="<?php echo $data['nip'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Guru</td>
                <td><input name='namaguru' type='text' id="namaguru" value="<?php echo $data['namaguru'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input name='alamat' type='text' id="alamat" value="<?php echo $data['alamat'] ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input name='jk' type='radio' id="jk" <?php if($data['jk'] == 'lelaki') echo 'checked'?> value="lelaki">Laki-Laki
                <input name='jk' type='radio' id="jk" <?php if($data['jk'] == 'perempuan') echo 'checked'?> value="perempuan" >Perempuan</td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' value='simpan'></td>
            </tr>
        </table>
    </form>
</body>

</html>