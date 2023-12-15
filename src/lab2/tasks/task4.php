<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 4</title>
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
        $themes = [
            "../assets/canada.jpg",
            "../assets/champignon.jpg",
            "../assets/furniture.jpg",
            "../assets/hawk.jpg"
        ];
        $keys = array_keys($themes);
        shuffle($keys);
        echo "
    <h1>Виберіть зображення печериці:</h1>";
        foreach ($keys as $i) {
            echo "<a href='?link=$i'>
            <img name='mushroom$i' height='250px' weight=250px src='" . $themes[$i] . "' /></a>";
        }
        echo "<br>";
            switch ($_GET['link']) {
                case '0':
                    echo "<h1>Неправильно! Це прапор Канади</h1>";
                    break;
                case '1':
                    echo "<h1>Правильно! Це печериці</h1>";
                    break;
                case '2':
                    echo "<h1>Неправильно! Це меблі</h1>";
                    break;
                case '3':
                    echo "<h1>Неправильно! Це яструб</h1>";
                    break;
                default:
                    echo "<h1>Ви не вибрали зображення</h1>";
                    break;
            }

        ?>

    </div>

</body>

</html>