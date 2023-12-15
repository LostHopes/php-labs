<?php
require("../../config.php");
$titleId = $_GET["id"];

$query_str = "SELECT title, content, date FROM melnychuk_news WHERE id = $titleId";

$query = mysqli_query($db_server, $query_str);

while ($news = $query->fetch_assoc()) {
    echo "<h1 class='title'>". $news["title"] ."</h1>
            <p class='content'>". $news["content"] ."</p>
            <br>
            <b class='date'>". $news["date"] ."</b>";
}

?>