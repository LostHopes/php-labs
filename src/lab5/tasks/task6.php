<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №6</title>
    <style>
        h1.task {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include("../files/functions.php");
    echo "<h1 class='task'>12 варіант</h1>";
    tripleP("../files/var12.txt");

    echo "<h1 class='task'>13 варіант</h1>";
    printSentenceWithProgramming("../files/var13.txt");

    echo "<h1 class='task'>14 варіант</h1>";
    printSentenceWithReplaceComma("../files/var14.txt");

    ?>
</body>

</html>