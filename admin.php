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
	<title>Admin | SMK INDONESIA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="halaman">
		<div id="header"></div>
		<div id="menu">
			<ul>
				<li><a href="adminwelcome.php" target="tengah">Beranda</a></li>
				<li><a href="#">Manajemen Data Master</a>
					<ul>
						<li><a href="admin/bacaadmin.php" target="tengah">Data Admin</a></li>
						<li><a href="guru/bacaguru.php" target="tengah">Data Guru</a></li>
						<li><a href="siswa/bacasiswa.php" target="tengah">Data Siswa</a></li>
						<li><a href="jurusan/bacajurusan.php" target="tengah">Jurusan</a></li>
						<li><a href="mapel/bacamapel.php" target="tengah">Mata Pelajaran</a></li>
						<li><a href="kelas/bacakelas.php" target="tengah">Kelas</a></li>
					</ul>
				</li>
				<li><a href="mengajar/bacamengajar.php" target="tengah">Mengajar</a></li>
				<li><a href="nilai/bacanilai.php" target="tengah">Nilai</a></li>
			</ul>
		</div>
		<div id="konten">
			<div id="kiri">
				<img src="gambar/sekolah.jpg" width="180">
				<hr>
				<h3>SMK Nusantara</h3>
			 	"Terpercaya dan berstandar internasional dalam layanan pembentukan insan profesional"
			</div>
			<div id="tengah">
				<iframe src="adminwelcome.php" frameborder="0" scrolling="auto" width="530" height="300" name="tengah"></iframe>			
			</div>
			<div id="kanan">
				<h3>Anda sudah login</h3>
				<a href="logout.php">Logout</a>
			</div>
		</div>
		<div id="clear"></div>
		<div id="footer">
			SMK INDONESIA<br>
			Copyright &copy; 2017. All right reserved.
		</div>
	</div>
</body>
</html>