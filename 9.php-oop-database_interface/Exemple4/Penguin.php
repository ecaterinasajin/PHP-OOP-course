<?php

require_once 'SwimInterface.php';

class Penguin implements SwimInterface
{
    public function swim()
    {
        echo " I am Penguin. I can swim " . PHP_EOL;
    }
}