<!DOCTYPE html>
<html>
<head>
    <title>Latihan 12</title>
</head>
<body>
    <?php
    $cars = [
            ["Volvo",20,7],
            ["BMW",25,5],
            ["toyota",30,17]
            ];

    ?>
    <ul>
        <li><?php echo "mobil ".$cars[0][0].", stock = ". $cars[0][1]. ",terjual = ". $cars[0][2];
        ?>
        <li><?php echo "mobil ".$cars[1][0].", stock =". $cars[1][1]. ",terjual =". $cars[1][2];
        ?></li>
        <li>
            <?php echo "mobil ".$cars[2][0].", stock =". $cars[2][1]. ",terjual =". $cars[2][2];
        ?>
        </li>
    </ul>
</body>
</html>