<?php

echo "Welcome to inheritance<br>";

class Employee{
  public $name;
  private $salary = 200;
  public $grade = 4.89;

  function __construct($name)
  {
    $this->name = $name;
  }

  function setSalary($salary){
    $this->salary = $salary;
  }

  function  getSalary(){
    echo "The salary of $this->name is: $this->salary";
  }

}


class Programmer extends Employee{
  private $lang = "php";

  function __construct($name){
    $this->name = $name;
  }

  function changeLanguage($lang){
    $this->lang = $lang;
    // echo $this->salary; ----> This will throw an error cz salary is private in parent class.
  }

}

$rohan = new Employee("Rohan"); 
$rohan->grade = 4.88;
echo "Rohan grade is: $rohan->grade<br>";


$geeta = new Programmer("Geeta");
$geeta->grade = 4.88;
echo "Rohan grade is: $geeta->grade<br>";
$geeta->changeLanguage('python');





?>