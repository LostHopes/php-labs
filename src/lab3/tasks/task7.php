<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 7</title>
</head>

<body>
    <?php
    $url = $_SERVER['PHP_SELF'];
    $number = rand(1, 6);
    echo "<h1>Випадкове число: $number</h1>";
    switch ($number) {
        case 1:
            echo "<h1>Викликаю функцію func1</h1>";
            break;
        case 2:
            echo "<h1>Викликаю функцію func2</h1>";
            break;
        case 3:
            echo "<h1>Викликаю функцію func3</h1>";
            break;
        default:
            echo "<h1>Некоректні дані</h1>";
            break;
    }
    ?>
    <a href="<?php echo "?num=$number" ?>" id="value">Передати випадкове число</a>

</body>

</html>