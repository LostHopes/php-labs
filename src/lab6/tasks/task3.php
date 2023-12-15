<?php

$html = '
<!DOCTYPE html>
<html>
<head>
    <title>Завдання №3</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>Це параграф</p>
    <div>
        <p>Це параграф в div</p>
    </div>
</body>
</html>';


$bodyContent = strip_tags($html, '<body>');

$bodyContent = preg_replace('/\s+/', ' ', $bodyContent);

echo "Текст без тегів: ".$bodyContent;


?>
