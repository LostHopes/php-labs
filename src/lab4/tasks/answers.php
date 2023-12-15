<?php
$questions = array(
    "color" => "Питання 1: Який ваш улюблений колір?",
    "os" => "Питання 2: Яка ваша операційна система?",
    "animal" => "Питання 3: Яка ваша улюблена тварина?",
    "age" => "Питання 4: Який ваш вік?"
);

$answers = array();

foreach ($questions as $key => $value) {
    if (!isset($_POST[$key])) {
        echo "Ви не відповіли на запитання: " . $value . "<br>";
    } else {
        $answers[$value] = $_POST[$key];
    }
}

echo "<h2>Результати анкети:</h2>";

foreach ($answers as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>