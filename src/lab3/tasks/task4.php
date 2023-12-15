<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 12,13,14</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <h1>Завдання №12</h1>
    <?php
    echo "<table border='3px'>";
    echo "<tr>
    <td> Число </td>
    <td> Корінь </td>
    </tr>";
    foreach (range(1, 10) as $number) {
        echo sprintf("
        <tr>
        <td> %d </td>
        <td> %.2f </td>
        </tr>", $number, sqrt($number));
    }
    echo "</table>";
    ?>
    <h1>Завдання №13</h1>
    <?php
    $arr_of_sqrt = array();
    foreach (range(3, 10) as $number) {
        $arr_of_sqrt[] = sqrt($number);
    }
    echo sprintf(
        "Середнє арифметичне квадратів чисел в діапазоні від 3 до 10: %.2f",
        array_sum($arr_of_sqrt) / count($arr_of_sqrt)
    );
    ?>
    <h1>Завдання №14</h1>
    <?php

    foreach (range(1, 10) as $i) {
        $S[] = 1/$i;
    }

    echo sprintf("Сума членів ряду: %.4f", array_sum($S));
    

    ?>
</body>

</html>