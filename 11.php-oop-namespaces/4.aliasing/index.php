<?php
require_once 'ns.php';
/*
$object = new Kate\SomeSubNamespace1\SubNamespace2\MyAwesomeClassWhichDoesSomethingAwesome();
// Or
use Kate\SomeSubNamespace1\SubNamespace2\MyAwesomeClassWhichDoesSomethingAwesome;
$object = new MyAwesomeClassWhichDoesSomethingAwesome();
// Or
use Kate\SomeSubNamespace1\SubNamespace2\MyAwesomeClassWhichDoesSomethingAwesome as MyClass;
$object = new MyClass();
*/

use Kate\SomeSubNamespace1\SubNamespace2;
use Kate\SomeSubNamespace1\SubNamespace2\MyAwesomeClassWhichDoesSomethingAwesome as MyClass;
$object = new MyClass();
$u = new SubNamespace2\User();


