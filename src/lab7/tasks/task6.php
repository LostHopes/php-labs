<?php
class Country
{
    private string $name;
    private string $capital;
    private string $population;

    public function __construct(string $name, string $capital, string $population)
    {
        $this->name = $name;
        $this->capital = $capital;
        $this->population = $population;
    }

    public function showTable()
    {
        $country = array(
            "name" => $this->name,
            "capital" => $this->capital,
            "population" => $this->population
        );
        echo "<h1>Country information:</h1><table border=\"4\" width=\"150px\" cellspacing=\"3\"<tbody>";
        foreach ($country as $field => $index) {
            echo "<tr>
                <td>$field</td>
                <td>$index</td>
                </tr>";
        }
        echo "</tbody></table>";
    }

}

$country = new Country("Mexico", "México", "128,932,753");
$country->showTable();

?>