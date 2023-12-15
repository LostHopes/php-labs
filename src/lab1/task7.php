<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 7 (температура)</title>
</head>

<body>
    <form method="post" action="../lab1/task7.php">
        <input type="text" name="temperature[]" placeholder="Enter temperature:">
        <input type="text" name="temperature[]" placeholder="Enter temperature:">
        <input type="text" name="temperature[]" placeholder="Enter temperature:">
        <input type="range" min="1" max="3" value="3" name="action">

        <input name="temp" type="submit">
    </form>
    <?php
    $temperature = $_POST['temperature'];
    switch ($_POST['action']) {
        case 1:
            echo sprintf("Max temperature:%.1f", max($temperature));
            break;
        case 2:
            echo sprintf("Min temperature: %.1f", min($temperature));
            break;
        case 3:
            echo sprintf("Average temperature: %.1f", array_sum($temperature) / count($temperature));
            break;
    }
    ?>
</body>

</html>