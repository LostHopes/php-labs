<?php
class Student
{
    public $name;
    public $surname;
    public $group;


    
    public function getInfo()
    {

        echo "<div class=\"student\">
            <h1>Student: <br></h1> 
            <h3>" . $this->name . "</h3>" .
            "<h3>" . $this->surname . "</h3>" .
            "<h3>" . $this->group . "</h3>" .
            "</div>";
    }
}

$student1 = new Student();
    $student1->name = "Arsen";
    $student1->surname = "Melnychuk";
    $student1->group = "IPZ-22";
    $student1->getInfo();

    $student2 = new Student();
    $student2->name = "Vasya";
    $student2->surname = "Melnychuk";
    $student2->group = "IPZ-22";
    $student2->getInfo();

    $student3 = new Student();
    $student3->name = "Petya";
    $student3->surname = "Melnychuk";
    $student3->group = "IPZ-22";
    $student3->getInfo();


?>