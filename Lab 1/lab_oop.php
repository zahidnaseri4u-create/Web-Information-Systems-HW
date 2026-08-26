
<?php

class Student
{
    public $name;
    public $studentId;
    public $department;

    function __construct($name = null, $studentId = null, $department = null)
    {
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function sayHello()
    {
        echo "Hello! I am a student.<br>";
    }

    function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }
}

$student1 = new Student();
$student1->sayHello();

echo "<br>";

$student1 = new Student(
    "Ahmad",
    1001,
    "Computer Science"
);

$student1->showInfo();

echo "<br>";

$student2 = new Student(
    "Sara",
    1002,
    "Information Systems"
);

$student2->showInfo();

echo "<br>";

class BankAccount
{
    public $ownerName;
    private $balance;

    function __construct($ownerName, $balance)
    {
        $this->ownerName = $ownerName;
        $this->balance = $balance;
    }

    function showBalance()
    {
        echo "Balance: " . $this->balance . "<br>";
    }
}

$account1 = new BankAccount(
    "Ahmad",
    5000
);

echo "Owner: " . $account1->ownerName . "<br>";
$account1->showBalance();

echo "<br>";

class Person
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function introduce()
    {
        echo "My name is " . $this->name . "<br>";
    }
}

class StudentPerson extends Person
{
    function study()
    {
        echo $this->name . " is studying.<br>";
    }
}

$student3 = new StudentPerson("Ahmad");

$student3->introduce();
$student3->study();

?>
