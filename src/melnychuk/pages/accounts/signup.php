<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кондитерські вироби | Реєстрація</title>
</head>

<body>
    <div class="signup">
        <form action="?<?php echo "" ?>" method="post">
            <input type="text" name="username" placeholder="Введіть логін">
            <input type="text" name="email" placeholder="Введіть пошту">
            <select name="role">
                <option value="Покупець" name="customer">Покупець</option>
                <option value="Продавець" name="saler">Продавець</option>
            </select>
            <input type="text" name="password" placeholder="Введіть пароль">
            <input type="text" name="repeat_password" placeholder="Введіть пароль для підтвердження">
            <input type="submit" name="register">
        </form>
    </div>
    <?php
    include("../../functions/users.php");

    if (isset($_POST["register"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $role = $_POST["role"];
        $password = $_POST["password"];
        $repeat_password = $_POST["repeat_password"];

        if($password != $repeat_password)
        {
            echo "<h1>Паролі не співпадають</h1>";
            exit(1);
        }
        

        require("../../configuration/db.php");
        global $connection;
        $query = $connection->query("SELECT * FROM users");

        while ($rows = $query->fetch_assoc()) {
            if (($username == $rows["email"] || $username == $rows["username"])){
                echo "<h1>Користувач з логіном або поштою ". $username ." уже існує.</h1>";
                return;
            }
        }


        $insert_row = "INSERT INTO users(username, email, role, password) VALUES(
                '$username', '$email', '$role', '$password')";
        $connection->query($insert_row);


        if ($connection->errno) {
            echo "<h1>Неможливо додати користувача в базу даних. Причина: " . $connection->error . "</h1>";
            exit(1);
        }
    }

    ?>
</body>

</html>