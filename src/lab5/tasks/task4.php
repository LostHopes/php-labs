<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №4</title>
</head>

<body>
    <?php

    $file_path = "../files/tag2.txt";
    $out_path = "../files/out.txt";

    if (!file_exists($file_path)) {
        $file = fopen($file_path, 'w');
        fclose($file);
    }

    $file_contents = file_get_contents($file_path);
    $lines = explode("\n", $file_contents);

    $num_tags = 0;

    echo '<table border="3px" width="40%">';
    echo '<tr><th>Tag</th><th>Description</th></tr>';

    foreach ($lines as $line) {
        $parts = explode(' ', $line, 2);
        if (count($parts) >= 2) {
            $num_tags++;

            echo '<tr><td>' . $parts[0] . '</td><td>' . $parts[1] . '</td></tr>';
        }
    }

    echo '</table>';

    $out_file = fopen($out_path, 'w');
    fwrite($out_file, "A total of $num_tags tags are described in the tag2.txt file.");
    fclose($out_file);

    $out_contents = file_get_contents($out_path);
    echo '<p>' . $out_contents . '</p>';

    ?>



</body>

</html>