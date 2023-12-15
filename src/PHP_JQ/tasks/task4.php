<?php

require("../../config.php");
$query = mysqli_query($db_server, "SELECT DISTINCT theme FROM melnychuk_news");

foreach ($query->fetch_array() as $item) {
    trim($item);
}

while ($news = $query->fetch_assoc()) {
    echo "<a class='theme' href='../pages/titles.php?theme=" . $news["theme"] . "'>" . $news["theme"] . "</a>
                <h3 class='title'>" . $news["title"] . "</h3>
                <hr>";
}

$src = "../files/out.txt";

$file = fopen($src, "w");

$count = mysqli_query($db_server, "SELECT * FROM melnychuk_news");

fwrite($file, "Загальна кількість новин: " . $count->num_rows);

fclose($file);


?>