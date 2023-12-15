<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №5</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <h1>Завдання №5.1</h1>
    <?php
    include("../function.php");
    
    for ($i=0; $i < 10; $i++) { 
        $values[] = $i;
    }

    print_array($values, true);
    ?>
    <h1>Завдання №5.2</h1>

    <?php
    $arr = array(array());
    print_table_array();    
    ?>
</body>

</html>