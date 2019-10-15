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
<h2>Visi Misi</h2>
	<hr>
	<h4>VISI</h4>
   		 Unggul dalam prestasi berdasarkan iman dan taqwa
	<h4>MISI</h4>
	<ol>
		<li>Meningkatkan ketaqwaan terhadap Tuhan Yang Maha Esa melalui kegiatan intra dan ekstra kurikuler</li>
		<li>Meningkatkan kualitas pembelajaran dan bimbingan sehingga setiap peserta didik dapat berkembang secara optimal</li>
		<li>Menegakkan disiplin bagi seluruh warga sekolah untuk meningkatkan kualitas profesionalisme</li>
		<li>Mengoptimalkan pembinaan peserta didik dalam mengikuti lomba akademik maupun non akademik</li>
		<li>Meningkatkan hubungan kerjasama yang harmonis di dalam maupun di luar lingkungan sekolah</li>
		<li>Melaksanakan pembelajaran dan bimbingan yang efektif sehingga siswa dapat berkembang secara optimal</li>
		<li>Menumbuhkan semangat keunggulan dan kehandalan</li>
		<li>Mendorong dan membantu siswa untuk mengenal potensi   dirinya, sehingga dapat berkembang secara optimal</li>
		<li>Menimbulkan penghayatan terhadap ajaran agama yang dianut dan budaya bagsa sehingga menjadi sumber kearifan</li>
		<li>Menerapkan manajemen partisipatif dengan  semua komponen yang ada  dengan seluruh warga</li>
	</ol>
</body>
</html>