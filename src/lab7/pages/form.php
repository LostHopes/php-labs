<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація (Завдання №7)</title>
    <style>
        form[name="person"] {
            display: inline-block;
            text-align: center;
            margin-top: 200px;
        }

        body {
            text-align: center;
        }

        form[name="person"]>input {
            display: block;
            margin: 20px;
            height: 30px;
            width: 400px;
            text-align: center;
        }

        form[name="person"]>input[type="submit"] {
            width: 150px;
            height: 40px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <form method="get" name="person" action="success.php">
        <input type="text" name="name" placeholder="Введіть ім'я:">
        <input type="text" name="surname" placeholder="Введіть прізвище:">
        <input type="number" name="age" placeholder="Введіть ваш вік:">
        <input type="email" name="mail" placeholder="Введіть вашу пошту:">
        <input type="submit" name="send">
    </form>
</body>

</html>