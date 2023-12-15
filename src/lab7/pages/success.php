<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>
        h1.error {
            color: darkred;
            text-align: center;
        }

        h1.success {
            color: greenyellow;
        }

        div.info>table,
        div.info>h1 {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <?php

    include("../tasks/task7.php");
    displayInfo();

    ?>
</body>

</html>