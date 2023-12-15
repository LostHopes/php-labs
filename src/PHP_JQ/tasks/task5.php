<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новини | Видалити</title>
</head>

<body>
    <form method="post">
        <input type="number" name="articleId" placeholder="Введіть ідентифікатор новини (id)">
        <input type="submit">
    </form>
    <?php
    require("../../config.php");
    $articleId = $_POST["articleId"];
    $query_str = "DELETE FROM melnychuk_news WHERE id = $articleId";

    $query = mysqli_query($db_server, $query_str);

    if ($query) {
        echo "<b id='deleted'>Article $articleId was successfully deleted</b>";
    } else {
        echo "<b id='del_err'> Error occurred when trying to delete article with id $articleId </b>";
        return;
    }

    while ($news = $query->fetch_assoc()) {
        echo "<h1 class='theme'>" . $news["theme"] . "</h1>
                    <h3 class='title'>" . $news["title"] . "</h3>
                    <b class='date'>" . $news["date"] . "</b>
                    <hr>";
    }

    ?>
</body>

</html>