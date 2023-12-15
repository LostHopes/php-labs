<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 2</title>
    <?php



    function calculate()
    {
        $x = $_GET['x'];
        $y = $_GET['y'];
        $z = $_GET['z'];

        if (($x > 0 && $y > 0 && $z > 0) && filter_var_array([$x, $y, $z], FILTER_VALIDATE_INT)) {
            return ((1 - $x / $y) ** 2) + $z;
        }
    }

    ?>
</head>

<body>
    <form action="./task2.php" method="get">
        <input type="text" name="x" placeholder="Введіть число x">
        <input type="text" name="y" placeholder="Введіть число y">
        <input type="text" name="z" placeholder="Введіть число z">
        <input type="submit" name="send">
    </form>
    <?php
    if (isset($_GET['send'])) {
        echo calculate();
    }
    ?>
</body>

</html>