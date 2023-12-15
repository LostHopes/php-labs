<?php


class User
{
    public function __construct()
    {
    }
    public function db()
    {
        require($_SERVER["DOCUMENT_ROOT"] . "/melnychuk/configuration/db.php");
        global $connection;
        $table_create_users = "CREATE TABLE IF NOT EXISTS users(
        id BIGINT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(50) UNIQUE,
        email VARCHAR(255) UNIQUE,
        role VARCHAR(255),
        password VARCHAR(50)
        );";
        $connection->query($table_create_users);

        if ($connection->errno) {
            echo "<h1>Помилка створення бази даних. Причина: " . $connection->error . "</h1>";
        }

    }
    public function signup($username, $email, $role, $password)
    {
        
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

    public function signin($login, $email)
    {
        require($_SERVER["DOCUMENT_ROOT"] . "/melnychuk/configuration/db.php");
        global $connection;
        

        $query = $connection->query("SELECT * FROM users");

        while ($rows = $query->fetch_assoc()) {
            if ($login == $rows["username"] || $email == $rows["email"]) {
                echo "<h1>Користувач з логіном $login вже існує";
            }
        }
    }

    public function signed($login, $password) : bool
    {
        require($_SERVER["DOCUMENT_ROOT"] . "/melnychuk/configuration/db.php");
        global $connection;

        $query = $connection->query("SELECT * FROM users");

        while($rows = $query->fetch_assoc())
        {
            if (($login == $rows["username"] || $login == $rows["email"]) && $password == $rows["password"]) {
                return true;
            }
        }
        return false;
    }

    public function display()
    {
        require($_SERVER["DOCUMENT_ROOT"] . "/melnychuk/configuration/db.php");
        global $connection;
        $query = $connection->query("SELECT * FROM users");

        echo "<table class='user'><tbody>";
        while($rows = $query->fetch_assoc())
        {
            echo "<tr>

                <td>". $rows["username"] ."</td>
                <td>". $rows["role"] ."</td>

            </tr>";
        }
        echo "</tbody></table>";
    }

}

?>