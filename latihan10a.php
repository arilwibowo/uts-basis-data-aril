<?php
function salam($nama){
    date_default_timezone_set("Asia/Jakarta");
    echo date("d-m-y , H:i");
    echo "<br>";
$jam = date("H:i");
if($jam>"00:00" && $jam<="08:00"){
    echo "Selamat Pagi $nama";
}elseif($jam > "08:00" && $jam<"12:00"){
    echo "Selamat Siang $nama";
}elseif($jam > "12:00" && $jam<"18:00"){
    echo "Selamat Sore $nama";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan10a</title>
</head>
<body>
    <?php
    echo salam("Mas Aril");
    ?>
</body>
</html>