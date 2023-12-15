<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Themes</title>
    <style>
        h1,
        div {
            text-align: center;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $allthemes = [
            "../assets/canada.jpg",
            "../assets/furniture.jpg",
            "../assets/hawk.jpg",
            "../assets/champignon.jpg",
            "../assets/strawberry.jpg",
            "../assets/vegetables.jpg"
        ];
        $themes = array_slice($allthemes, 0, 4);
        $keys = array_keys($themes);
        shuffle($keys); 
        echo "
    <h1>Виберіть зображення яструба:</h1>";
        foreach ($keys as $key) {
            echo "<a href='?link=$key'>   
            <img height='250px' weight=250px src='" . $themes[$key] . "' /></a>";
        }
        echo "<br>";
            switch ($_GET['link']) {
                case '0':
                    echo "<h1>Неправильно! Це прапор Канади</h1>";
                    break;
                case '1':
                    echo "<h1>Неправильно! Це меблі</h1>";
                    break;
                case '2':
                    echo "<h1>Правильно! Це яструб</h1>";
                    break;
                case '3':
                    echo "<h1>Неправильно! Це печериця</h1>";
                    break;
                case '4':
                    echo "<h1>Неправильно! Це ягода</h1>";
                    break;
                case '5':
                    echo "<h1>Неправильно! Це овоч</h1>";
                    break;
                default:
                    echo "<h1>Ви не вибрали зображення!</h1>";
                    break;
            }

        ?>

    </div>

</body>

</html>