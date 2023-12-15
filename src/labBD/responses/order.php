<?php

require("../../config.php");

$id = $_GET["id"];
$amount = $_POST["amount"];

if (!preg_match('/^[1-9][0-9]*$/', $amount)) {
    echo "<h1 class='alert'>Ви вказали невірне значення</h1>";
    return;
}


$query = mysqli_query($db_server, "SELECT quantity FROM storage WHERE id = $id");
$column = $query->fetch_assoc();
$quantity = $column["quantity"];



if (isset($_POST["confirm_add"])) {
    mysqli_query(
        $db_server,
        "UPDATE storage
        SET quantity = ($quantity + $amount)
        WHERE id = $id;"
    );
}


if (isset($_POST["confirm_buy"])) {
    if ($amount > $quantity || $quantity <= 0) {
        echo "<h1 class=\"alert\">Товару немає на складі</h1>";
        $query->close();
        return;
    }
    mysqli_query(
        $db_server,
        "UPDATE storage
        SET quantity = ($quantity - $amount)
        WHERE id = $id;"
    );
}

$data = mysqli_query($db_server, "SELECT * FROM storage WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Замовлення</title>
    <link rel="stylesheet" href="../../css/products/order.css">
</head>

<body>
    <?php
    if ($data->num_rows > 0) {
        echo "<h1 id=\"title\">Опис товару</h1>";
        $rows = $data->fetch_assoc();
        echo "<div class='desc'>
                <h2>Назва товару: " . $rows["product"] . "</h2>
                <h2>Ціна: " . $rows["price"] . "&#36;</h2>
                <h2>Залишилось на складі: " . $rows["quantity"] . "</h2>
                <h2 id='back'>
                    <a href='../tasks/task5-6.php'> Повернутись на головну сторінку </a>
                </h2>
        </div>";
    }
    $data->close();
    ?>
</body>

</html>