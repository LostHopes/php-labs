<?php

class Products
{
    public function add()
    {
        global $connection;
        require($_SERVER["DOCUMENT_ROOT"] . "/melnychuk/configuration/config.php");

        if ($connection->errno) {
            echo "<h1>Помилка підключення до бази даних. Причина: " . $connection->error . "</h1>";
        }

        mysqli_query($connection, "CREATE TABLE IF NOT EXISTS products(
            id BIGINT PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(255) UNIQUE,
            src VARCHAR(255),
            price FLOAT,
            quantity SMALLINT
        );");

        $insert = mysqli_query($connection, "INSERT INTO products(name, src, price, quantity)
                                VALUES
                                ('Печеня', 'assets/images/cookies.jpg', 3.99, 200),
                                ('Тістечка', 'assets/images/cakes.jpg', 2.99, 50),
                                ('Цукерки', 'assets/images/candys.jpg', 1.99, 350)");

    }

    public function display()
    {
        require($_SERVER["DOCUMENT_ROOT"] . "/melnychuk/configuration/db.php");
        global $connection;

        $products = "SELECT * FROM products";
        $query = mysqli_query($connection, $products);
        echo "<div class='products'>";
        while ($rows = $query->fetch_assoc()) {
            echo "<div>
                    <label for='product'>Назва товару: " . $rows["name"] . "</label>;
                    <img src=" . $rows["src"] . " width='150px' height='150px' name='image'>
                    <b> Ціна товару: " . $rows["price"] . "$</b>
                    <b> Кількість в наявності: " . $rows["quantity"] . "</b>
                </div>";
        }
        echo "</div>";



    }
}

?>