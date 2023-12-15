<?php
$surname = $_POST['surname'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

if (empty($surname) || empty($name) || empty($email) || empty($password) || empty($repeat_password) || $password != $repeat_password) {
  echo "Помилка: не всі поля заповнені або паролі не співпадають";
} else {
  $data = array(
    "Прізвище" => $surname,
    "Ім'я" => $name,
    "E-mail" => $email,
    "Пароль" => $password
  );

  echo "<center><table border=3>";
  foreach ($data as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "</tr>";
  }
  echo "</table></center>";
}
?>