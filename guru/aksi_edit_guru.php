<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$kdguru = $_POST['kdguru'];
    $nip =$_POST['nip'];
    $namaguru =$_POST['namaguru'];
    $alamat =$_POST['alamat'];
    $jk =$_POST['jk'];

	$sql2 = "UPDATE guru SET nip = '$nip', namaguru = '$namaguru', alamat = '$alamat', jk = '$jk' WHERE kdguru = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:bacaguru.php');
	}
	else
	{
	echo "Edit admin gagal";
	}
?>