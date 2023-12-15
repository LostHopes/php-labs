<?php
require("config.php");
#include_once("db.php");
header("Content-Type: text/html; charset=" . $config['charset']);
?>
<html>
<title> My PHP</title>
<form>
    <table border=0>
        <tr>
            <td>Login:</td>
            <td><input type='text' name='ULogin'></td>
        <tr>
        <tr>
            <td>Пароль:</td>
            <td><input type='password' name='Passw'></td>
        <tr>
        <tr>
            <td><input type='submit' value='Go' name='Send'></td>
            <td>&nbsp</td>
            </td>
        </tr>
    </table>
</form>
<?php
$zm = 10;
echo "<h2>Розробка Web-застосувань</h2>
<h3>Перелік лабораторних робіт</h3>
<div class=list>
<a href=lab1/lab1.php?zm=$zm>PHP: lab1.php</a><br>
<a href=lab2/lab2.php?zm=" . $zm . ">PHP: lab2.php</a><br>
<a href=lab3/lab3.php>PHP: lab3</a><br>
<a href=lab4/lab4.php>PHP: lab4</a><br>
<a href=lab5/lab5.php>PHP: lab5</a><br>
<a href=lab6/lab6.php>PHP: lab6</a><br>
<a href=lab7/lab7.php>PHP: lab7</a><br>
<a href=PHP_JQ/lab9.php>PHP+JQ</a><br>
<a href=labBD/lab8.php>PHP+BD MySQL</a><br>
<a href=melnychuk/index.php>Контрольна робота</a><br>";
echo "</div>";
echo "zm=$zm <br>";
echo "Zm=$Zm <br>";
echo 'zm=$zm <br>';

?>

</html>