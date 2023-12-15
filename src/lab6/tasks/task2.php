<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №2</title>
    <style>
        .caption {
            text-align: center;
        }

        form[name="regex"]>input[type="submit"] {
            display: block;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php

    $file = file_get_contents("text.txt");
    $to_array = explode(".", $file);
    $tag = preg_grep("/тег/", $to_array);

    echo "<h1 class='caption'>a) Входженння слова 'тег' починаючи з 0</h1><br/>";
    foreach ($tag as $key => $value) {
        echo htmlspecialchars("$key слово => $value") . "<br>";
    }

    echo "<h1 class='caption'>b) Входженння слова 'HTML' починаючи з 0</h1><br/>";
    $html = preg_grep("/HTML/", $to_array);
    foreach ($html as $key => $value) {
        echo htmlspecialchars("$key слово => $value") . "<br>";
    }

    echo "<h1 class='caption'>c) Частини слова, введеної в однорядкове текстове поле.</h1>
    <form method='get' name='regex'>
        <input type='text' name='word' placeholder='Введіть слово:'>
        <input type='submit' name='sent'>
    </form>";

    $word = $_GET["word"];
    if ($_GET["sent"] == true) {
        $filtered_sentences = preg_grep("/$word/", $to_array);

        sort($filtered_sentences, SORT_DESC);

        foreach ($filtered_sentences as $key => $filtered_sentence) {
            echo $key. htmlspecialchars($filtered_sentence). "<br>";
        }
    }

    ?>

</body>

</html>