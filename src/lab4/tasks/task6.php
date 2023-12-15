<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №6</title>
</head>

<body>
    <form action="table.php" method="post">
        <label for="surname">Прізвище:</label>
        <input type="text" name="surname" required>
        <br>
        <label for="name">Ім'я:</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" required>
        <br>
        <label for="repeat_password">Повторіть пароль:</label>
        <input type="password" name="repeat_password" required>
        <br>
        <input type="submit" value="Готово">
    </form>

</body>

</html>
