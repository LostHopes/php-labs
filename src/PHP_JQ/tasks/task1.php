<?php

require("../../config.php");

$query = mysqli_query(
    $db_server,
    "CREATE TABLE IF NOT EXISTS melnychuk_news(
    id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    theme VARCHAR(255),
    title VARCHAR(255) UNIQUE,
    content TEXT,
    date DATETIME
)"
);


?>