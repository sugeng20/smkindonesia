<?php
	session_start();
	if(isset($_SESSION['username'])){
	   header("location:admin.php");		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SMK INDONESIA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="halaman">
		<div id="header"></div>
		<div id="menu">
			<ul>
				<li><a href="home.php" target="tengah">Beranda</a></li>
				<li><a href="visimisi.php" target="tengah">Visi Misi</a></li>
				<li><a href="#">Data Master</a>
					<ul>
						<li><a href="dataguru.php" target="tengah">Data Guru</a></li>
						<li><a href="datasiswa.php" target="tengah">Data Siswa</a></li>
						<li><a href="jurusan.php" target="tengah">Jurusan</a></li>
						<li><a href="matapelajaran.php" target="tengah">Mata Pelajaran</a></li>
						<li><a href="kelas.php" target="tengah">Kelas</a></li>
					</ul>
				</li>
				<li><a href="galeri.php" target="tengah">Galeri</a></li>
				<li><a href="mengajar.php" target="tengah">Mengajar</a></li>
				<li><a href="nilai.php" target="tengah">Nilai</a></li>
				<li><a href="#">Pencarian</a>
					<ul>
						<li><a href="cari/cariguru.php" target="tengah">Cari Guru</a></li>
						<li><a href="cari/carisiswa.php" target="tengah">Cari Siswa</a></li>
					</ul>
				</li>
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
				<iframe frameborder="0" scrolling="auto" width="530" height="300" name="tengah" src="home.php"></iframe>
			</div>
			<div id="kanan">
				<h3>Login User</h3>
			 	<form method="POST" action="ceklogin.php">
			 		<input type="text" name="username" placeholder="Username">
			 		<br>
			 		<input type="password" name="password" placeholder="Password"><br>
			 		<input type="submit" value="Login">
			 	</form>
			 	<hr>
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