<?php
require("../../config.php");
$theme = $_GET["theme"];

$query_str = "SELECT * FROM melnychuk_news WHERE theme LIKE '%". $theme ."%'";
$query = mysqli_query($db_server, $query_str);

while ($news = $query->fetch_assoc()) {
    $id = trim($news["id"]);
    echo "<a class='title' href='../pages/content.php?id=$id'>" . $news["title"] . "</a> <hr>";
}


?>