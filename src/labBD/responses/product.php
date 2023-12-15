<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товар</title>
    <link rel="stylesheet" href="../../css/products/desc.css">
</head>

<body>
    <?php

    require("../../config.php");

    $id = $_GET["id"];

    $query = mysqli_query($db_server, "SELECT product, price, quantity FROM storage WHERE id = '" . $id . "'");

    echo "<h1 id=\"title\">Опис товару</h1>";
    $rows = $query->fetch_assoc();
    echo "<div class='desc'>
                <h1>Назва товару: " . $rows["product"] . "</h1>
                <h1>Ціна: " . $rows["price"] . "&#36;</h1>
                <h1>На складі:" . $rows["quantity"] . "</h1>
        </div>";


    $db_server->close();

    ?>
    <form method="post" action="<?php echo "../responses/order.php?id=$id" ?>" class="update">
        <input type="number" name="amount" placeholder="Кількість товару">
        <input type="submit" value="Купити" name="confirm_buy">
        <input type="submit" value="Поповнити склад" name="confirm_add">
    </form>
    <h1 id="back">
        <a href="../tasks/task5-6.php">На головну</a>
    </h1>
</body>

</html>