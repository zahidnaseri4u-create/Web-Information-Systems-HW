<?php

class Student
{
    public $name;
    public $studentId;
    public $department;

    function __construct($name, $studentId, $department){
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }
}

$student1 = new Student(
    "Zahid",
    1001,
    "Computer Science IS"
);

$student1->showInfo();

?>