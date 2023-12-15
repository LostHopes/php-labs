<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новини | Всі</title>
</head>

<body>
    <?php
    require("../../config.php");
    include("../functions/print.php");
    $query_str = "SELECT * FROM melnychuk_news ORDER BY date ASC";
    $query = mysqli_query($db_server, $query_str);
    showAllNews($query);

    ?>
</body>

</html>