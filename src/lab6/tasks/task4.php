<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №4</title>
    <style>
        form[name="user-data"]>input {
            display: block;
            margin: 20px;
            width: 200px;
            height: 30px;
        }

        form[name="user-data"] {
            display: inline-block;
            margin-top: 200px;
        }

        body {
            text-align: center;
        }

        form[name="user-data"]>input[type="submit"] {
            width: 205px;
            height: 30px;
        }

        strong.invalid {
            display: block;
            color: red;
        }

        .valid {
            display: block;
            color: greenyellow;
        }
    </style>
</head>

<body>

    <?php

    $firstname = $_POST['name'];
    $surname = $_POST['surname'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];
    $email = $_POST['email'];

    $myForm = "
    <form method='post' name='user-data'>
        <input type='text' name='name' placeholder='Ім&apos;я'>
        <input type='text' name='surname' placeholder='Прізвище'>
        <input type='text' name='login' placeholder='Логін'>
        <input type='text' name='password' placeholder='Пароль'>
        <input type='text' name='repeat_password' placeholder='Підтвердіть пароль'>
        <input type='text' name='email' placeholder='Електронна пошта'>
        <input type='submit' name='sent'>
    </form>";

    echo $myForm;

    function validateField($value, $pattern, $message)
    {
        if (preg_match($pattern, $value)) {
            echo "<strong class='valid'>✔</strong>";
        } else {
            echo "<strong class='invalid'>" . $message . '</strong>';
        }
    }
    echo "<strong class='valid'></strong>";

    if ($_POST['sent'] == true) {
        validateField($firstname, "/^[\p{Lu}][\p{Ll}\p{L}]*$/", "Ім'я введено невірно");
        validateField($surname, "/^[\p{Lu}][\p{Ll}\p{L}]*$/", "Прізвище введено невірно");
        validateField($login, "/^[a-z]+$/", "Логін введено невірно");
        validateField($password, "/^[A-Za-z0-9]{6,20}$/", "Пароль введено невірно");
        validateField($email, "/^.+@[^\.].*\.[a-z]{2,}$/", "Пошта введена направильно");

        if ($password === $repeat_password) {
            echo "<strong class='valid'>✔</strong>";
        } else {
            echo "<strong class='invalid'>Паролі не спіпадають</strong>";
        }   
    }
    ?>

</body>

</html>