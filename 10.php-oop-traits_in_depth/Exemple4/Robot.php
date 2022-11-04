<?php

class Robot
{
    private $maxRunningSpeed = 0;
    private $maxWalkingTime;

    public function __construct($maxSpeed, $maxWalkingTime)
    {
        $this->maxRunningSpeed = $maxSpeed;
        $this->maxWalkingTime = $maxWalkingTime;        
    }

    public function getMaxSpeed()
    {
        return $this->maxRunningSpeed;
    }

    public function setMaxSpeed($maxRunningSpeed): void
    {
        $this->maxRunningSpeed = $maxRunningSpeed;
    }

    public function getMaxWalkingTime()
    {
        return $this->maxWalkingTime;
    }

}