<?php

class Car
{
    public $color;
    public $manufacturer;

    //const MY_CONSTANT = [];
    const MANUFACTURER_BMW = 'BMW';
    const MANUFACTURER_TESLA = 'tesla';
    const MANUFACTURER_MERCEDES = 'mercedes';

    const COLOR_RED = 'red';
    const COLOR_GREEN = 'green';
    const COLOR_BLUE = 'blue';
    

    /*public function myTestFunction()
    {
        self::MY_CONSTANT;
    }*/

    public function __construct($color, $manufacturer)
    {
        $this->color = $color;
        $this->manufacturer = $manufacturer;
    }
}

//$myCar = new Car(color:'red', manufacturer:'mercedes');
$myCar = new Car(Car::COLOR_GREEN, Car::MANUFACTURER_MERCEDES);
var_dump($myCar);
?>