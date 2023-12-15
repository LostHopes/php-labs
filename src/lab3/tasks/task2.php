<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №2</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Варіант 12: mt_rand(1,22)</h1>
    <?php
    $container = array();
    for ($i=0; $i < 10; $i++) { 
        $container[$i] = mt_rand(1,22);
        echo "Індекс числа $container[$i] є: $i<br>";
    }
    echo sprintf("<br>Максимальне число: %d<br>", max($container));
    echo sprintf("Мінімальне число: %d<br>", min($container)); 
    ?>
</body>
</html>