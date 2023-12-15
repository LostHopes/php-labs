<?php

function create_table2($data, $border = 1, $cellpadding = 4, $cellspacing = 4)
{
    echo "<h4> Результат виклику функції create_table2: </h4> border=$border";
    echo "<table border=$border  cellpadding=$cellpadding cellspacing=$cellspacing>\n";
    reset($data); //    встановлює покажчик масиву на його початок
    $value = current($data); //current повертає поточний елемент масиву
    while ($value) {
        echo "<tr><td>$value</td></tr>\n";
        $value = next($data);
        //next - переміщують показник на елемент вперед на один елемент; 
        //next – спочатку змінює покажчик, потім – повертає значення, each–навпаки;
    }
    echo '</table>';
    echo "<div>Кількість параметрів:" . func_num_args() . "<br />";
    //Функція func_num_args() визначає, скільки аргументів було передано функції користувача
    $args = func_get_args();
    //func_get_args() повертає масив, який містить ці аргументи
    foreach ($args as $arg)
        echo $arg . "<br/>";
    echo "</div>";
}


function print_array(array $arr, bool $reverse = false)
{
    $rv_arr = array_reverse($arr);

    if ($reverse) {
        echo "В оберненому порядку: <br>";
        for ($i = 0; $i < sizeof($arr); $i++) {
            echo $rv_arr[$i] . "<br>";
        }
    } else {
        echo "В звичайному порядку: <br>";
        for ($i = 0; $i < sizeof($arr); $i++) {
            echo $arr[$i] . "<br>";
        }
    }
}


function print_table_array()
{
    $SIZE = 6;
    echo "<table border='3px' width='35%'><tr>";
    for ($i = 0; $i < $SIZE; $i++) {
        for ($j = 0; $j < $SIZE; $j++) {
            $arr[$i][$j] = mt_rand(1, 100);
            echo "<td><center>" . $arr[$i][$j] . "<center></td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>
    <strong>Одновимірні масиви:</strong>
    <table border='3px' width='35%'><tr>";
    for ($i = 0; $i < $SIZE; $i++) {
        $one_dim_arr[] = $arr[$i][$i];
        print("<td><center>" . $one_dim_arr[$i] . "</center></td>");
    }

    echo "</tr></table>";
    $res = array_column($arr, $SIZE - 1);
    print("Мінімальне значення одновимірного масиву: " . min($one_dim_arr) . "<br>");
    print("Максимальне значення останнього стовпця: " . max($res) . "<br/>");

    print("Числа в останньому стовпці: ");
    foreach ($res as $val) {
        print(" " . $val);
    }
}

function generate_array(int $number)
{
    $arr = array();
    for ($i = 0; $i < $number; $i++) {
        $arr[] = $i * $i;
        print("<br><strong>Індекс $i числа: ". $arr[$i] ."</strong><br>");
    }
}

?>