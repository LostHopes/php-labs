<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №1</title>
    <style>
        .task {
            text-align: center;
            font-size: 30px;
            font-family: 'Courier New', Courier, monospace;
        }

        form[name="ex8"]>input {
            display: block;
            margin: 15px;
        }
    </style>
</head>

<body>
    <?php
    echo "<p class='task'>Example 1</p>";
    include("../files/ex1.html");

    echo "<p class='task'>Example 2</p>";
    $PI = include("../files/ex2.php");
    echo $PI;

    echo "<p class='task'>Example 3</p>";
    include("../files/functions.php");
    checkIfFileExists("ex2.php");

    echo "<p class='task'>Example 4</p>";
    createAndReadFile("ex4.txt");

    echo "<p class='task'>Example 8</p>";
    include("../upload.php");
    ?>
</body>

</html>