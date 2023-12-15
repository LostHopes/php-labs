<?php
require("../config.php");
//include_once("../db.php");
include_once("function.php");
header("Content-Type: text/html; charset=" . $config['charset']);
if (!empty($_GET["zm"])) {
    echo "Значення переданої змінної zm=" . $_GET["zm"];
} else {
    echo "zminna zm not fount";
}
$zm = $_GET["zm"];
?>
<html>
<h2>PHP. Робота з масивами</h2>
<?php
$my_array = array('Рядок 1', 'Рядок 2', 'Рядок 3');
create_table2($my_array, 3, 8, 8);
?>
<style>
    div>a {
        margin-right: 50px;
        text-decoration: none;
    }
</style>

<body>
    <div>
        <a href="example2.php">Приклад 2. Пошук мін/мах значення архіву </a><br><br>
        <a href="./tasks/task1.php">Завдання 1</a>
        <a href="./tasks/task2.php">Завдання 2</a>
        <a href="./tasks/task3.php">Завдання 3</a>
        <a href="./tasks/task4.php">Завдання 4</a>
        <a href="./tasks/task5.php">Завдання 5</a>
        <h3 class='back'><a href="../index.php">Повернутися в головне меню</a><br></h3>
    </div>
</body>

</html>