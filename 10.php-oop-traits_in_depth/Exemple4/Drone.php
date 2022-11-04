<?php

class Drone
{
    public $cameraResolution;
    private $maxFlyingSpeed = 0;
    private $maxFlyingTime;

    public function __construct($maxFlyingSpeed, $maxFlyingTime, $cameraResolution)
    {
        $this->maxFlyingSpeed = $maxFlyingSpeed;
        $this->maxFlyingTime = $maxFlyingTime;
        $this->cameraResolution = $cameraResolution;
    }

    public function getCameraResolution()
    {
        return $this->cameraResolution;
    }

    public function setCameraResolution($cameraResolution): void
    {
        $this->cameraResolution = $cameraResolution;
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
        return $this->getMaxWalkingTime;
    }

    public function setMaxWalkingTime($maxWalkingTime): void
    {
        $this->setMaxWalkingTime = $maxWalkingTime;
    }
}