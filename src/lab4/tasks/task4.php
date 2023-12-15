<?php
$countries = array(
    "USA" => array("capital" => "Washington", "population" => "331.9 millions"),
    "Canada" => array("capital" => "Toronto", "population" => "38.25 millions"),
    "France" => array("capital" => "Paris", "population" => "67.75 millions")
);

foreach ($countries as $country => $data) {
    print_r("Country: " . $country . ", Capital: " . $data['capital'] . ", Population: " . $data['population'] . "<br><br>");
}

?>