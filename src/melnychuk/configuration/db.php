<?php

$db_name = 'id17750473_pastry';
$db_host = 'localhost';
$db_user = 'id17750473_melnychuk';
$db_pass = 'Password123!';

$connection = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name");

if ($connection->connect_errno) {
    echo "<h1>Помилка підключення до бази даних. Код помилки: ". $connection->connect_error ."</h1>";
    exit(1);
}

?>

