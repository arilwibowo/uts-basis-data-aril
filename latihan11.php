<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 11</title>
</head>
<body>
    <?php
    $cars = ["BMW","TOYOTA","VOLVO"];
    //var_dumb($cars);
    echo "saya punya" . $cars[0] . "." . $cars[1] . "." . $cars[2];

    ?>
    <ul>
        <li><?php echo $cars[0]; ?></li>
        <li><?php echo $cars[1]; ?></li>
        <li><?php echo $cars[2]; ?></li>
</ul>
</body> 
</html>