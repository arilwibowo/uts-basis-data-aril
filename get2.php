<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan Get 2</title>
</head>
<body>
	<h2>Detail Penduduk</h2>
	<ul>
		<li>Nama : <?php echo $_GET["nama"]; ?></li>
		<li>NIK : <?php echo $_GET["nik"]; ?></li>
		<li>Alamat : <?php echo $_GET["alamat"]; ?></li>
		<li><img src="image/<?php echo $_GET["gambar"]; ?>"></li>

	</ul>
	<h3><a href="get1.php">Kembali ke data penduduk</a></h3>
	
</body>
</html>