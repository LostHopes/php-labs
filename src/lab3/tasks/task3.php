<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №3</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <h1>Піднесення кожного числа в масиві до квадрату</h1>
    <?php

    $values = array(5, 7, 33, 52, 84);

    foreach ($values as &$value) {
        echo sprintf("Число %d в квадраті = %d<br>", $value, $value ** 2);
    }

    ?>
</body>

</html>