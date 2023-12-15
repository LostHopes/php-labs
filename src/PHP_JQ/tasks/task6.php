<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новини | Друк</title>
    <link rel="stylesheet" href="../../css/news/write.css">
</head>

<body>
    <form action="" method="post" class="print">
        <input type="text" placeholder="Введіть тему" name="theme" minlength="3" maxlength="20">
        <input type="text" placeholder="Введіть заголовок" name="title" minlength="5" maxlength="100">
        <textarea type="text" placeholder="Введіть текст" name="content"></textarea>
        <input type="submit" value="Опублікувати" name="publish">

        <?php

        if (isset($_POST["publish"])) {

            $theme = $_POST["theme"];
            $title = $_POST["title"];
            $content = $_POST["content"];

            $date = new DateTime();

            require("../../config.php");

            $query = mysqli_query(
                $db_server,
                "INSERT INTO melnychuk_news (theme, title, content, date)
                    VALUES
                    ('$theme', '$title', '$content', '" . $date->format("Y-m-d H:i:s") . "')"
            );

            if ($query) {
                echo "<h1 class='published'>Новина успішно опублікована</h1>";
            } else {
                echo "<h1 class='err_publish'>Помилка при спробі публікації новини</h1>";
            }
        }

        ?>
    </form>
</body>

</html>