<?php

require_once 'FlyInterface.php';
require_once 'SwimInterface.php';

class Duck implements FlyInterface, SwimInterface
{
    public function fly()
    {
        echo " I am duck. I can flying " . PHP_EOL;
    }

    public function swim()
    {
        echo " I am duck. I can swim " . PHP_EOL;
    }
}