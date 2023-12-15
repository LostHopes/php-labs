<?php
class MultiplicationTable
{
    private int $number;
    public function __construct($number)
    {
        $this->number = $number;
    }

    public function showTable()
    {
        echo "<table border=\"4\" width=\"150px\" cellspacing=\"3\"<tbody>
            Multiplication table of number $this->number";
        for ($i = 1; $i < 10; $i++) {
            echo "<tr>
                <td>$i</td>
                <td> $i x $this->number = " . $this->number * $i . "</td>
                </tr>";
        }
        echo "</tbody></table>";
    }
}

$table1 = new MultiplicationTable(3);
$table1->showTable();

$table2 = new MultiplicationTable(4);
$table2->showTable();

$table3 = new MultiplicationTable(8);
$table3->showTable();


?>