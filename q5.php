<?php

//Write a class called 'Employee' that extends the 'Person' class. Implement a method to display employee details.

 class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString() {
        return "Name: " . $this->name . "\n" .
               "Age: " . $this->age . "\n";
    }
}

class Employee extends Person {
    private $salary;
    private $position;

    public function __construct($name, $age, $salary, $position) {
        parent::__construct($name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getPosition() {
        return $this->position;
    }

    public function displayDetails() {
        echo "Name: " . $this->name . "</br>";
        echo "Age: " . $this->age . "</br>";
        echo "Salary: " . $this->salary . "</br>";
        echo "Position: " . $this->position . "</br>";
    }
}

$emp = new Employee("Cris Cañon", 38, 29999, "Junior Developer");
$emp->displayDetails();