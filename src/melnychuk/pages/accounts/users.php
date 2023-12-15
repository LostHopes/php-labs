<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кондитерський вироби | Користувачі</title>
</head>

<body>
    <?php

    include("../../configuration/db.php");

    $query = $connection->query("SELECT * FROM users");

    echo "<table border='3' class='user'><tbody>";
    while ($rows = $query->fetch_assoc()) {
        echo "
                <td>" . $rows["username"] . "</td>
                <td>" . $rows["role"] . "</td>

            </tr>";
    }
    echo "</tbody></table>";

    ?>
</body>

</html>