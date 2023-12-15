<?php
class User
{
    private $name;
    private $surname;
    private $age;
    private $mail;
    public function __construct()
    {
        $this->name = $_GET['name'];
        $this->surname = $_GET['surname'];
        $this->age = $_GET['age'];
        $this->mail = $_GET['mail'];
    }

    private function isFieldEmpty(): bool
    {
        if ((empty($this->name) || empty($this->surname) || empty($this->age) || empty($this->mail))) {
            echo "<h1 class=\"error\">Всі поля не заповнені</h1>";
            return true;
        }
        return false;

    }

    public function getInfo(): void
    {
        if (!$this->isFieldEmpty()) {

            $user = array(
                "name" => $this->name,
                "surname" => $this->surname,
                "age" => $this->age,
                "mail" => $this->mail
            );
            

            echo "<div class=\"info\"><h1 class=\"success\">User information:</h1><table border=\"4\" cellspacing=\"3\"<tbody>";
            foreach ($user as $field => $index) {
                echo "<tr>
                <td>$field</td>
                <td>$index</td>
                </tr>";
            }
            echo "</tbody></table></div>";

        }

    }
}

function displayInfo(): void
{
    if (isset($_GET["send"])) {
        $user = new User();
        $user->getInfo();
    }
}

?>