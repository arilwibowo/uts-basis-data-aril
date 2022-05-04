<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>latihan3</title>
</head>
<body> 
	<h1>
		<?php 
		$namadepan="aril";
		$namabelakang="wibowo";
		echo "nama saya $namadepan $namabelakang";
		echo "<br>";

		//operator aritmatika +,-,*,/,%

		$y=2;
		$x=2.5;
		echo $y+$x;
		echo "<br>";

		//operator assigment =,-=,+=,/=,/=
		$z=3;
		$z=4;
		echo $z*=3;
		echo "<br>";

		//operator perbandingan ==,>=,<=,!=
		var_dump(1=="1");
		echo "<br>";

		//operator identitas ===
		var_dump(1==="1");
		echo "<br>";

		//operator logika ||,&&,!
		var_dump($x<1 || $x%2 ==0);



		
		 ?>
	</h1>
	
</body>
</html>