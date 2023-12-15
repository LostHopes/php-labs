<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кондитерські вироби | Вхід</title>
</head>

<body>
    <div class="signin">
        <form action="<?php echo "../../index.php" ?>" method="post">
            <input type="text" name="login" placeholder="Введіть пошту або логін">
            <input type="text" name="password" placeholder="Введіть пароль">
            <input type="submit" name="confirm">
        </form>
        <?php

        $login = $_POST["login"];
        $password = $_POST["password"];

        if (isset($_POST["confirm"])) {
            require("../../configuration/db.php");


            $query = $connection->query("SELECT * FROM users");

            while ($rows = $query->fetch_assoc()) {
                if ($login != $rows["username"] || $email != $rows["email"]) {
                    echo "<h1>Користувач з логіном не існує</h1>";
                    return;
                }

                if(($login == $rows["username"] || $email == $rows["email"]) && $password == $rows["password"]){
                    
                }

            }
        }



        ?>
    </div>
</body>

</html>