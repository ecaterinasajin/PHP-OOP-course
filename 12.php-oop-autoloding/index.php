<?php

/*sp1_autoload_register(function($className){
    //echo $className;
    //exit;
    //include $className;
    include dirname(FILE).'/'.str_replace('\\', "/", $className).'.php';
    //echo "Autoloade class: ".$className.PHP_EOL;
});*/

include "Class1.php";
include "ns/User.php";
include "ns1/subns1/ClassSubns1.php";
include "ns1/subns2/ClassSubns2.php";
include "ns2/ClassSubns2.php";

$user = new \Class1();
$user = new \ns1\User();
$user = new \ns1\subns1\ClassSubns1();
$user = new \ns1\subns2\ClassSubns2();
$user = new \ns2\ClassSubns2();