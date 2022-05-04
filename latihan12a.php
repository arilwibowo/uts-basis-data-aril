<!DOCTYPE html>
<html>
<head>
    <title>Latihan 12a</title>
</head>
<body>
    <?php
    $cars = [
            ["Volvo",20,7],
            ["BMW",25,5],
            ["Toyota",30,17]
            ];

    ?>
    <?php foreach ($cars as $car ) : ?>
        
    <ul>
        <li>
            <?php echo "mobil ".$car[0].", stock = ". $car[1]. ",terjual = ". $car[2];
        ?>

    </ul>
    <?php endforeach; ?>    
</body>
</html>