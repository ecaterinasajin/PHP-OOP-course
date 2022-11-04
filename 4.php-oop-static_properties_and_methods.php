<?php

use Car as GlobalCar;

class Car
{
    private $color = 'red';
    private $weight = 2000;

    static public $availableColors = ['red', 'green', 'blue', 'white'];
    
    /*static $couter = 0;
    public $myCounter = 0;

    public function __construct()
    {
        $this->myCounter++;
        self::$couter++;
    }*/

    public static function getAvailableColors()
    {
        return self::$availableColors;
    }
}

//$myCar->color;

/*$myCar = new Car();
echo Car::$couter.PHP_EOL;
$myCar = new Car();
echo Car::$couter.PHP_EOL;*/

/*$myCar1 = new Car();
echo Car::$couter.' '.$myCar1->myCounter.PHP_EOL;
$myCar2 = new Car();
echo Car::$couter.' '.$myCar2->myCounter.PHP_EOL;*/

$myCar = new Car();
Car::getAvailableColors();

?>
