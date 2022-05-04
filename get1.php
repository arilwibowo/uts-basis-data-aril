<?php 
$penduduk = [
	[
		"nama"=>"aril",	
		"nik"=>"20670143",
		"alamat"=>"Jl. pusponegoro",
		"gambar"=>"ARIL.jpg"
	],
	[
		"nama"=>"wibowo",	
		"nik"=>"20670143",
		"alamat"=>"Jl. Kartini",
		"gambar"=>"BOWO.jpg"
	],
	[
		"nama"=>"tibul",	
		"nik"=>"20670143",
		"alamat"=>"Jl. Merdeka",
		"gambar"=>"BIMBIM.jpg"
	]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan Get 1</title>
</head>
<body>
	<?php foreach ($penduduk as $pdk): ?>
		<ul>
			<li> Nama : <a href="get2.php?nama=
				<?php echo $pdk["nama"]; ?>&nik=
				<?php echo $pdk["nik"]; ?>&alamat=
				<?php echo $pdk["alamat"]; ?>&gambar=
				<?php echo $pdk["gambar"]; ?>">
				<?php echo $pdk["nama"]; ?></a></li>
				
			</ul>
		<?php endforeach; ?>
	</body>
	</html>