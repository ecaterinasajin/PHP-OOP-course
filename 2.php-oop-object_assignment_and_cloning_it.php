<?php 

class Car
{
    public $color = 'red';
    public $weight;
    private $year;
}

$car = new Car();

$car2 = $car;
//$car->color = 'green';
//$car = null;
//$car2 = null;

//var_dump($car2);

$car2 = clone $car;
//var_dump($car === $car2);

$car2->color = 'green';
var_dump($car);

?>
