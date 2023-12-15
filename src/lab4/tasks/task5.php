<?php
echo "<h1>Завдання 5.1</h1>";
$sentences = array(
    "first" => "He was punished.",
    "second" => "He was hurt.",
    "last" => "He was blessed."
);
$temp = $sentences["last"];
$sentences["last"] = $sentences["first"];
$sentences["first"] = $temp;

foreach ($sentences as $sentence) {
    print("$sentence<br>");
}

echo "<h2>Завдання 5.2</h2>";
$regions = [
    [
        "name" => "Івано-Франківськ",
        "cities" => [
            ["name" => "Тисмениця", "population" => 9175],
            ["name" => "Калуш", "population" => 66140],
            ["name" => "Яремче", "population" => 8044],
        ]
    ],
    [
        "name" => "Львів",
        "cities" => [
            ["name" => "Белз", "population" => 2257],
            ["name" => "Борислав", "population" => 33186],
            ["name" => "Винники", "population" => 18099],
        ]
    ],
    [
        "name" => "Київ",
        "cities" => [
            ["name" => "Ірпінь", "population" => 60084],
            ["name" => "Буча", "population" => 28533],
            ["name" => "Прип'ять", "population" => 0],
        ]
    ],
];

$max_population = 0;
$max_city = null;
foreach ($regions as $region) {
    foreach ($region["cities"] as $city) {
        if ($city["population"] > $max_population) {
            $max_population = $city["population"];
            $max_city = $city;
        }
    }
}

echo "<table>";
foreach ($regions as $region) {
    echo "<tr>";
    echo "<td><b>" . $region["name"] . "</b></td>";
    echo "<td></td>";
    echo "</tr>";
    foreach ($region["cities"] as $city) {
        if ($city == $max_city) {
            echo "<tr style='background: blue;'>";
        } else {
            echo "<tr>";
        }
        echo "<td>" . $city["name"] . "</td>";
        echo "<td>" . $city["population"] . "</td>";
        echo "</tr>";
    }
}
$total = 0;
echo "</table>";

echo "<br><b>Кількість мешканців у кожній області:</b><br>";
foreach ($regions as $region) {
    $total_population = 0;
    foreach ($region["cities"] as $city) {
        $total_population += $city["population"];
    }
    echo $region["name"] . ": " . $total_population . "<br>";
    $total += $total_population;
}
echo sprintf("<b>Кількість мешканців у %d областях: %d<b>", count($regions), $total);


?>