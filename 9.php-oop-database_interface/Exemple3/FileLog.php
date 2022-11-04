<?php

require_once 'AbstractLogger.php';

class DbLog extends AbstractLogger
{
    public function log(string $level, string $logMessage)
    {
        echo "Calling method " . __METHOD__ . PHP_EOL;
    }
}