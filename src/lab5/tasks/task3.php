<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №3</title>
</head>

<body>
    <?php

    $file = fopen("../files/tag1.txt", "r") or die("Unable to open file!");

    while (!feof($file)) {
        echo fgets($file) . "<br><td>";
    }

    fclose($file);

    ?>

</body>

</html>