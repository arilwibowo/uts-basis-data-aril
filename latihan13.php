<!DOCTYPE html>
<html>
<head>
    <title>Latihan13</title>
</head>
<body>
    <form action="" method="post">
        <label id="nama"> Nama : </label>
        <input type="text" name="nama" id="nama">
        <button type="submit" name="submit">Kirim </button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nama=$_POST["nama"];
    if(empty($nama)){
        echo "nama belum diisi...";
    } else {
        echo "Welcome". $nama;
    }
}
?>
</body>
</html>