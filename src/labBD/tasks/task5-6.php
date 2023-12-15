<?php

require("../../config.php");
mysqli_query(
    $db_server,
    "CREATE TABLE IF NOT EXISTS storage(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        product VARCHAR(50) UNIQUE,
        src VARCHAR(20),
        price FLOAT,
        quantity INTEGER
        );"
);


mysqli_query(
    $db_server,
    "INSERT INTO storage (product, src, price, quantity) 
    VALUES 
        ('Indian FTR 1200 S', '../files/indian.jpg', 24285.72, 6),
        ('BMW R 1250 GS', '../files/bmw.jpg', 25128.31, 4),
        ('Triumph Speed Triple 1200RS', '../files/triumph.jpg', 21687.91, 5)
        ; "
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/products/main.css">
</head>

<body>
    <?php

    $query = mysqli_query($db_server, "SELECT * FROM storage");
    if ($query->num_rows > 0) {
        echo "<h1 id='title'>Доступні товари</h1>
        <div class='container'>";
        while ($rows = $query->fetch_assoc()) {
            echo "<div class=\"product item\">
                    <h2 class=\"name\">
                        <a href=\"../responses/product.php?id=" . $rows["id"] . "\">
                        Назва товару: " . $rows["product"] . "
                        </a>    
                    </h2>
                    <h2>
                        <a href=\"../responses/product.php?id=" . $rows["id"] . "\">
                            <img src='" . $rows["src"] . "' width=\"150px\" height=\"150px\">
                        </a>
                    </h2>" .
                    "<h2>Ціна: " . $rows["price"] . "&#36;</h2>" .
                    "<h3>В наявності: " . $rows["quantity"] . "</h3>
                </div>";
        }
        echo "</div>";
    }
    $query->close();
    ?>
</body>

</html>