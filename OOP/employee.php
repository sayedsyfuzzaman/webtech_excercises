<?php

class Patron {
  protected $name;
  protected $age;
  protected $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    protected function show() {
        echo "------------------------ <br> Showing Informations <br>";
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
        echo "Salary: ".$this->salary."<br>";
    }
}


class Admin extends Patron {
  
    public function showInfo(){
        $this->show();
        echo "Designation: Admin<br>";
    }

    public function delete() {
        echo  "<br> Successfully Deleted! <br>";
    }

}

class Employee extends Patron {
  
    public function showInfo(){
        $this->show();
        echo "Designation: Employee<br>";
    }

    public function Add() {
        echo  "<br> Successfully Added! <br>";
    }

}

$adm = new Admin("Sayma", "30", "150000000");
$adm->showInfo();



$emp = new Employee("Sazin", "20", "10000");
$emp->showInfo();


$adm->delete();
$emp->add();

?>