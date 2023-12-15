<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 2</title>
</head>

<body>
    <h1>Перевірка наявності файлу</h1>
    <form method="post">
        <label for="filename">Введіть назву файлу:</label>
        <input type="text" id="filename" name="filename" placeholder="Введіть назву файлу:">
        <br>
        <input type="submit">
    </form>

    <?php
    $filename = $_POST['filename'];

    if (!file_exists($filename)) {
        echo "<p>Файл з іменем $filename у поточному каталозі не існує</p>";
    } else {
        echo "<p>Файл з іменем $filename існує:</p>";
        echo "<div>";
        echo "<p>Розмір: " . filesize($filename) . " байт</p>";
        echo "<p>Час створення: " . date("F d Y H:i:s.", filectime($filename)) . "</p>";
        echo "<p>Час останньої модифікації: " . date("F d Y H:i:s.", filemtime($filename)) . "</p>";
        echo "<li>Вміст файла:</li>";
        echo "<p>" . file_get_contents($filename) . "</p>";
        echo "</div>";
    }
    ?>
</body>

</html>