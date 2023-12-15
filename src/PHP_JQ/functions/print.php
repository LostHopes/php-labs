<?php

function showAllNews($query)
{
    if ($query->num_rows > 0) {
        while ($news = $query->fetch_assoc()) {
            echo "<h1 class='theme'>" . $news["theme"] . "</h1>
                    <h3 class='title'>" . $news["title"] . "</h3>
                    <p class ='content'>" . $news["content"] . "</h3>
                    <br>
                    <b class='date'>" . $news["date"] . "</b>
                    <hr>";
        }
    }
}



?>