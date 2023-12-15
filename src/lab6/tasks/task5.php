<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №5</title>
    <style>
        form[name="index"] {
            display: inline-block;
            margin-top: 200px;
        }

        body {
            text-align: center;
        }


        form[name="index"]>input{
            display: block;
            width: 307px;
            margin: 20px;
            height: 35px;
        }

        form[name="index"]>input[type="submit"] {
            width: 315px;
        }

        .valid::before{
            content: "Correct \2714";
            color: greenyellow;
        }

        .invalid::after{
            content: "Incorrect \2718";
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $country_code = $_GET['netherlands'];
    $pattern = preg_match("/^[1-9]\d{3} [A-Za-z]{2}$/", $country_code);
    ?>
    <form method="get" name="index">
        <h1>Нідерланди</h1>
        <input type="text" name="netherlands" placeholder="Введіть індекс Нідерландів">
        <input type="submit" name="sent">
        <h1 class="<?php if ($pattern) {echo "valid";} else{ echo "invalid";}?>">
        </h1>
    </form>
</body>

</html>