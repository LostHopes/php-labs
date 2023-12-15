<?php
require("../../config.php");
function addNews($src)
{
    global $db_server;

    $file = fopen($src, "r") or die("Can't open the file");
    $text = fread($file, filesize($src));

    $themes = new ArrayObject();
    $titles = new ArrayObject();
    $content = new ArrayObject();
    $date = new ArrayObject();

    $news = explode('&', $text);
    foreach ($news as $article) {
        $details = explode('~', $article);
        for ($i = 0; $i < sizeof($details); $i = +4) {
            $themes->append($details[$i]);
            $titles->append($details[$i + 1]);
            $content->append($details[$i + 2]);
            $date->append($details[$i + 3]);
        }
        
    }
    for ($i = 0; $i < sizeof($themes); $i++) {
        mysqli_query(
            $db_server,
            "INSERT INTO melnychuk_news(theme, title, content, date)
        VALUES 
        ('$themes[$i]', '$titles[$i]', '$content[$i]', '$date[$i]')"
        );
    }

    if (mysqli_errno($db_server)) {
        echo "<h1>Успішно додано інформацію в таблицю.</h1>";
    } else {
        echo "<h1>Помилка внесення даних в таблицю.</h1>";
    }


    fclose($file);
}
?>