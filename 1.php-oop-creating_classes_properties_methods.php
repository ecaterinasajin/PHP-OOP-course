<?php

class Car //Define the Class
{
    // Properties
    public $color = 'red';
    public $weight;
    private $year;
    private $availableColor = ['red', 'green', 'blue', 'white'];

    // Methods
    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setColor($color)
    {
       if(in_array($color, $this->availableColor)){
            $this->color = $color; 
       }
    }

    public function getColor()
    {
        return $this->color;
    }
}

$myCar = new Car(); // Define Object
$myCar->color = 'red';
$myCar->setYear(year:2010);
$myCar->getYear();
$myCar->setColor(color:'white');

echo $myCar->color;
echo $myCar->getYear();
echo $myCar->getColor();

?>
