<?php 

class Flower
{
    private $color = 'red';
    private $number = 5;

    public function __construct($color, $number)
    {
        //echo "I am created";
        $this->color = $color;
        $this->number = $number;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function __destruct()
    {
        echo "I am destroyed: ".$this->color.PHP_EOL;
    }
}


$myFlower = new Flower(color:'green', number:2);
$myFlower2 = new Flower(color:'white', number:8);
//$myFlower = new Flower();
echo $myFlower->getColor().PHP_EOL;
echo $myFlower2->getColor().PHP_EOL;

unset($myFlower);
sleep(seconds:2);
?>
