<?php function headerku(){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="navop">
	<div class="konten">
			<h2 class="kiri">&#9630; Sistem Informasi Klinik Desa</h2>
			<a href="logout.php" class="kanan">Logout</a>
	</div>
</div>

<div class="sideop">
	<div class="konten">
		<a href="index.php">&#9776; Pendaftaran Poli</a>
		<a href="pasien.php">&#9855; Registrasi Pasien</a>
		<a href="dafpasien.php">&#9745; Data Pasien</a>
		<a href="dokter.php">&#9739; Dokter</a>
		<a href="obat.php">&#128138; Obat</a>
		<!-- <a href="pembayaran.php">$ Pembayaran</a> -->
	</div>
</div>

<?php } ?>
	

<?php function footerku(){ ?>
<div class="footerop">
	<center>&copy; Sistem Informasi Klinik Desa </center>
</div>
</body>
</html>
<?php } ?>
