<?php

class User {
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
//geter
    public function getName(){
        return $this->name;
        //return $this->age;
    }

    public function setName($name){
        $this->name = $name;
    }


    // __get MAGIC METHOD    
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    //__set MAGIC METHOD
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
         $this->$property = $value;
        }
        return $this;

    }
}

 $user1 = new User('Ashin Indavudah', 20);
// echo $user1->setName('Ashin Revata');
// echo $user1->getName();
$user1->__set('age', 41);
echo $user1->__get('age');