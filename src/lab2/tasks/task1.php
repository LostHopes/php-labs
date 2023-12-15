<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 1</title>
</head>

<?php   

function calculate()
{
    $firstval = $_GET['first'];
    $secondval = $_GET['second'];
    return sprintf(
        "Віднімання: $firstval-$secondval=%.1f<br> Додавання: $firstval+$secondval=%.1f <br> Множення: $firstval*$secondval=%.1f\n",
        $firstval - $secondval, $firstval + $secondval, $firstval * $secondval
    );
}
?>

<body>
    <form action="./task1.php" method="get">
        <input type="text" placeholder="Введіть число:" name="first">
        <input type="text" placeholder="Введіть число:" name="second">
        <input type="submit" name="send">
    </form>
    <?php
    if (isset($_GET['send'])) {
        echo calculate();
    }
    ?>
</body>

</html>