<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №1</title>
    <style>
        .caption {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php


    $text = file_get_contents('text.txt');


    $allText = preg_replace('/<[^>]+>/', '', $text);
    echo "<h1 class='caption'>a) Весь заданий текст: </h1>
        <br>
        <p> $allText </p>";


    preg_match_all('/<(\w+)>/', $text, $openingTags);
    $openingTagNames = $openingTags[1];
    echo "<h1 class='caption'>b) Тільки назви відкриваючих тегів:</h1><br>";
    foreach ($openingTagNames as $tagName) {
        echo "$tagName <br>";
    }
    echo "<br>";

    preg_match_all('/<(\w+)>/', $text, $openingTags);
    $openingTagsWithBrackets = $openingTags[0];

    echo "<h1 class='caption'>c) Назви відкриваючих тегів разом і кутовими дужками: </h1><br>";
    foreach ($openingTagsWithBrackets as $tag) {
        echo htmlspecialchars($tag). "<br>";
    }
    ?>
</body>

</html>