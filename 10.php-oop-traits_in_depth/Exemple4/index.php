<?php
require_once 'Robot.php';
require_once 'Drone.php';

/*class FlyingRobot
{
    use DroneTrait, RobotTrait{

        DroneTrait::setMaxSpeed instanceof RobotTrait;
        DroneTrait::getMaxSpeed instanceof RobotTrait;
        DroneTrait::setMaxSpeed as setFlyingMaxSpeed;
        DroneTrait::getMaxSpeed as getFlyingMaxSpeed;
        DroneTrait::setMaxSpeed as setRunningMaxSpeed;
        DroneTrait::getMaxSpeed as getRunningMaxSpeed;
    }

    public function __constructor($maxRunningSpeed, $maxWalkingTime, $maxFlyingSpeed, $maxFlyingTime)
    {
            $this->maxWalkingTime = $maxWalkingTime;
            $this->maxFlyingTime = $maxFlyingTime;
            $this->setFlyingMaxSpeed($maxFlyingSpeed);
            $this->setRunningSpeed($maxRunningSpeed);
    }
}

$FlyingRobot = new FlyingRobot(40, 129, 60, 30);
echo $flyingRobot->getFlyingMaxSpeed() . PHP_EOL;
echo $flyingRobot->getRunningMaxSpeed() . PHP_EOL;
*/