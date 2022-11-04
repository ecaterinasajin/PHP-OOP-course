<?php 

interface MyInterface
{
    //const MY_CONSTANT = 1;
    //public function __construct();
    public function method1();
    //public function method2();
}
interface MyInterface3
{
    public function method3();
}
interface MyInterface2 extends MyInterface
{
    public function method2();
}

/*abstract class MyClass implements MyInterface
{
    const MY_CONSTANT = 2;
    public function method2()
    {

    }
}*/

/*class MyClass2 extends MyClass
{
    public function method1(){}
}*/

class MyClass implements MyInterface, MyInterface2
{
    public function method1()
    {

    }
    public function method2()
    {

    }
}

//echo MyInterface::MY_CONSTANT;
$myClass = new MyClass;

?>