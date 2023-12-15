<?php

$topic = array(
    2 => "thing 2",
    3 => "thing 3",
    4 => "thing 4",
    5 => "thing 5"
);
shuffle($topic);
foreach($topic as $id => $thing)
{
    echo "id: $id, thing: $thing<br>";
}

?>
