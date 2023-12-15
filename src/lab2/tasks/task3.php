<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 3</title>
</head>

<body>
    <?php

    function calculate()
    {
        $x = $_GET['x'];
        $y = $_GET['y'];

        if ($x > 0 && $y > 0) {
            return $x - $y;
        } elseif ($y < 0 && $x > 3 * $y) {
            return $x ** 2 - $y / $x;
        } else {
            return (3 * $x * $y) - (($x ** 2) * ($y ** 2));
        }
    }

    ?>
    <form action="./task3.php" method="get">
        <input type="text" name="x">
        <input type="text" name="y">
        <input type="submit" name="send">
    </form>

    <?php

    if (isset($_GET['send'])) {
        echo calculate();
    }

    ?>

</body>

</html>