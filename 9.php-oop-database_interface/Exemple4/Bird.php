<?php

require_once 'FlyInterface.php';

class Bird implements FlyInterface
{
    public function fly()
    {
        echo " I am bird. I can flying " . PHP_EOL;
    }
}