<?php

class ParentClass
{
    public $property1 = '1';
    protected $property2 = '2';
    private $property3 = '3';

    public function getProperty2(): string
    {
        return $this->property2;
        //return var_dump($this);
    }
    public function printText($text)
    {
        echo $text;
    }
}

class ChildClass extends ParentClass
{
    public $property1 = '11';
    protected $property2 = '22';

    public function getProperty2(): string
    {
        //return parent::getProperty2();
        $result = parent::getProperty2();
        return "Something ".$result;
    }

    public function printText($text)
    {
        echo $text;
    }
}

$obj = new ChildClass();
echo $obj->property1;

echo $obj->getProperty2();