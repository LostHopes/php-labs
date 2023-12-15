<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №7</title>
</head>
<body>
    <form method="get">
        <input type="text" name="value" placeholder="Введіть натуральне число: ">
        <input type="submit" name="send" value="Створити масив">
    </form>
    <?php
    $value = (int) $_GET['value'];
    print(gettype(($value)));
    if (isset($_GET['send']) && is_integer($value)) {
        include("../function.php");
        generate_array($value);
    }
    include_once("./task7.php");
    ?>
</body>
</html>