<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 5</title>
    <style>
        h1.task{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    include("../files/functions.php");
    $filename = "../files/melnychuk_text.txt";
    echo "<h1 class='task'>Завдання 5.1</h1>";
    sortWordsAlphabetically($filename);

    echo "<h1 class='task'>Завдання 5.2</h1>";
    findMostFrequentWords($filename);

    echo "<h1 class='task'>Завдання 5.3</h1>";
    findLongestWord($filename);

    echo "<h1 class='task'>Завдання 5.4</h1>";
    findShortestWord($filename);

    echo "<h1 class='task'>Завдання 5.5</h1>";
    findWordsStartingWithA($filename);

    echo "<h1 class='task'>Завдання 5.6</h1>";
    replaceLowercaseO($filename);

    echo "<h1 class='task'>Завдання 5.7</h1>";
    printRandomParagraph("../files/paragraphs.txt");

    ?>
</body>
</html>