<?php

use Person as GlobalPerson;

class Person
{
    public $name;
    protected $age;
    private $phone;

    public function __construct($name, $age, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function hello()
    {
        return "Hello from person";
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Employee extends Person 
{
    private $salary;

    public function __construct($name, $age, $phone, $salary)
    {
        parent::__construct($name, $age, $phone);
        $this->salary = $salary;
    }

    public function hello()
    {
        return "Hello from employee: $this->name";
    }
}

class Student extends Person 
{
    public $studentNo;
    public function __construct($name, $age, $phone, $studentNo)
    {
        parent::__construct($name, $age, $phone);
        $this->studentNo->hello();
    }
    public function hello()
    {
        return "Hello I am student: $this->name. with No: $this->studentNo";
    }
}

$employee = new Employee("Kate", "23", "1234567", "3000");
$student = new Student("John", "27", "0000000", "12334567");
echo $employee->hello();
echo $student->hello();