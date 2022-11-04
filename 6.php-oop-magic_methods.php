<?php

class Person
{
    //public $name = "Kate";
    //private $phone = 1234567;

    public $name;
    private $phone;

    static $counter = 0;

    //1.
    /*public function __construct()
    {
        echo "__construct is called" . PHP_EOL;
    }

    public function __destruct()
    {
        echo "__destruct is called" . PHP_EOL;
    }*/

    //2.
    /*public function __toString()
    {
        return "Name: $this->name. Phone: $this->phone";
    }*/

    //3.
    /*public function __get($propName)
    {
        if ($propName === 'username'){
            return $this->name;
        }
        return "Property \"$propName\" does not exist";
    }*/

    //4.
    /*public function __set($propName, $value)
    {
        if ($propName === 'username'){
            return $this->name;
        }
    }*/

    //5.
    /*public function __call($name, $arguments)
    {
        if ($name === 'getMobilePhone'){
            return $this->getPhone;
        }else if ($name === 'setMobilePhone'){
            call_user_func_array([$this, 'setPhone'], $arguments);
        }
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
       $this->phone = $phone;
    }*/

    //6.
    /*public static function __callStatic($name, $arguments)
    {
        echo "\"$name\" static method was called";
    }*/

    //7.
    /*public function __invoke()
    {
        return "Object was called as a function";
    }*/

    //8.
    /*public function __sleep()
    {
        unset($this->phone);
        return ['name'];
    }
    public function __wakeup()
    {
        echo "I am wakimg up";
    }*/

    //9.
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        self::$counter++;
    }
    public function __clone()
    {
        var_dump($this);
        self::$counter++;
    }
    public function __wakeup()
    {
        self::$counter++;
    }

}

//__construct
//$p = new Person();

//echo $p;

//echo $p->username;

//$p->username = 'Marry';
//echo $p->name;

/*echo $p->getMobilePhone();
$p->setMobilePhone('1111111');
echo $p->getMobilePhone();*/

//Person::hello();

//var_dump(is_callable($p));
//echo $p();

/*$serialized = serialize($p);
$newPerson = unserialize($serialized);
var_dump($newPerson);*/

$p = new Person ('Kate', '1234567');
var_dump($p);
$newPerson = clone $p;
$newPerson2 = unserialize(serialize($p));
var_dump($p, $newPerson, $newPerson2);
echo Person::$counter;
