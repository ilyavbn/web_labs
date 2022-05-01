<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class User {
    private $firstName;
    private $middleName;
    private $surname;
    private $birthDate;

    public function __construct($firstName, $middleName, $surname, $birthDate){
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->surname = $surname;
        $this->birthDate = $birthDate;
    }

    public function GetFullName(){
        return "$this->firstName $this->middleName $this->surname";
    }

    public function GetBirthDate(){
        return $this->birthDate;
    }

    public function SetName($input){
        $this->firstName = $input; 
    }

    public function SetMiddleName($input){
        $this->middleName = $input;
    }

    public function SetSurname($input){
        $this->surname = $input;
    }
}


class Student extends User{
    private $faculty;
    private $cathedra;
    private $group;

    public function __construct($firstName, $middleName, $surname, $birthDate, $faculty, $cathedra, $group) {
       parent::__construct($firstName, $middleName, $surname, $birthDate);
        $this->faculty = $faculty;
        $this->cathedra = $cathedra;
        $this->group = $group;

   }

    public function GetGroupNumber(){
       $splitedGroup = explode("-", $this->group);
       return $splitedGroup[0];
    }
    public function GetEntrance(){
       $splitedGroup = explode("-", $this->group);
       return $splitedGroup[1];
    }

}

$name = $_POST["first__name"];
$middleName = $_POST["middle__name"];
$surname = $_POST["surname"];
$birthDate = $_POST["birthDate"];
$faculty = $_POST["faculty"];
$cathedra = $_POST["cathedra"];
$group = $_POST["group"];

$S = new Student($name, $middleName, $surname, $birthDate, $faculty, $cathedra, $group);
echo "Group number: " . $S->GetGroupNumber()  . "<br>" . 
"Date of entrance: " . $S->GetEntrance() . "<br>" . 
"date of birth : " . $S->GetBirthDate() . "<br>" . 
"Full name : " . $S->GetFullName() . "<br>" ; 
$S->SetName("Ivan");
echo "Full name: " . $S->GetFullName() . "<br>"; 




/* $S = new Student("Ilya", "Ivanovich", "Groz", "01/01/01", "Math", "cathedraName", "IP-99"); */

?>
