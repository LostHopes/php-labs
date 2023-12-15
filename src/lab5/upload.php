<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>

<body>

    <div align='center'>
        <form action='<?php echo $_SERVER["PHP_SELF"] ?>' method='post' enctype='multipart/form-data'>
            <input type='text' name='subdir' placeholder='Enter name of subdirectory:'>
            <input type='file' name='uploadfile'>
            <input type='submit' name='submit' value='Завантажити'>
        </form>
    </div>
    <hr />

    <?php
    if (!empty($_POST["subdir"])) {
        $subdir = $_POST["subdir"];
    } else {
        echo "<p>zminna subdir not found</p>";
        exit;
    }

    $uploaddir = "../files/$subdir/";
    if (!file_exists($uploaddir)) {
        mkdir($uploaddir);
    }

    if (isset($_POST["submit"])) {
        if ($_FILES["uploadfile"]["error"] == UPLOAD_ERR_OK) {
            $uploadfile = $uploaddir . basename($_FILES["uploadfile"]["name"]);
            if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $uploadfile)) {
                echo "<p>Файл завантажений на сервер";
            } else {
                echo "<p>Файл не завантажений на сервер!";
            }
        } else {
            echo "<p>Помилка завантаження файлу: " . $_FILES["uploadfile"]["error"] . "</p>";
        }

        echo "<p>Оригінальна назва: " . $_FILES["uploadfile"]["name"] . "</p>";
        echo "<p>Тип файлу: " . $_FILES["uploadfile"]["type"] . "</p>";
        echo "<p>Розмір: " . $_FILES["uploadfile"]["size"] . "</p>";
        echo "<p>Тимчасове ім'я: " . $_FILES["uploadfile"]["tmp_name"] . "</p>";
    }
    ?>

</body>

</html>
