<?php
include("../tasks/task1.php");
class Task3 extends Student
{
    public function __construct(string $name, string $surname, string $group)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->group = $group;
    }
    public function __clone()
    {
        echo "<br><h3>Object copied</h3>";
    }
}


$student1 = new Task3( "Dennis", "Melnychuk", "IPZ-22");
echo "<br><h1>New student 1</h1>";
$student1->getInfo();

$student2 = new Task3("Paul", "Melnychuk", "IPZ-22");
echo "<br><h1>New student 2</h1>";
$student2->getInfo();

$student3 = new Task3("Andrew", "Melnychuk", "IPZ-22");
echo "<br><h1>New student 3</h1>";
$student3->getInfo();

$student4 = clone $student3;
echo "<h1>Student clone</h1>";
$student4->getInfo();


?>