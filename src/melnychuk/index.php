<?php

include($_SERVER["DOCUMENT_ROOT"] . "/melnychuk/functions/products.php");
include($_SERVER["DOCUMENT_ROOT"] . "/melnychuk/functions/users.php");
require($_SERVER["DOCUMENT_ROOT"] . "/melnychuk/configuration/db.php");

$user = new User();
$user->db();
$products = new Products();
$products->add();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кондитерські вироби | Головна</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="header">
        <div class="container links">
            <a href="pages/accounts/signin.php">Вхід</a>
            <a href="pages/accounts/signup.php">Реєстрація</a>
            <a href="pages/accounts/users.php">Користувачі</a>
            <?php
            require("./configuration/db.php");
            function signed($login, $password)
            {

                global $connection;

                $query = $connection->query("SELECT * FROM users
                WHERE username = '$login' OR email = '$login'");

                while ($rows = $query->fetch_assoc()) {
                    if (($login == $rows["username"] || $login == $rows["email"]) && $password == $rows["password"]) {
                        echo "<b> $login </b>";
                        return true;
                    }
                }
                return false;
            }

            $login = $_POST["login"];
            $password = $_POST["password"];

            require("./configuration/db.php");

            signed($login, $password);

            ?>
        </div>
    </div>

    <div class="body">
        <div class="container info">
            <h1>Інтернет магазин Мельничука Арсена Ярославовича</h1>
            <h1>Кондитерські вироби</h1>
            <?php

            if (!signed($login, $password)) {
                echo "<h1 class='guest'>Ви ввійшли як гість</h1>";
            }

            ?>
        </div>
    </div>

    <div class="products">
        <div class="container products">
            <?php
            $products->display();

            if (signed($login, $password)) {
                echo "<form method=\"post\" class=\"update\">
                <input type=\"number\" name=\"amount\" placeholder=\"Кількість товару\">
                <input type=\"submit\" value=\"Купити\" name=\"confirm_buy\">
                <input type=\"submit\" value=\"Поповнити склад\" name=\"confirm_add\">
            </form>
            <h1 id=\"back\">
                <a href=\"../melnychuk/index.php\">На головну</a>
            </h1>";
            }

            ?>
        </div>
    </div>
</body>

</html>