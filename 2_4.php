<?php

class User {
    public $name;
    public $age;


    //constructor 

    // Runs When an object is created 
    public function __construct($name, $age)
    {
        //echo ' contructor ran...';
        echo 'Class ' . __CLASS__ . 'instantiated<br>';
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHello(){
        return $this->name . 'Say Hello';
    }

    //destructor 

    // called when no other references to a certain object
    // used for cleanup, closing connections, etc....
    public function __destruct()
    {
        echo 'destructor ran....';
    }
}

//create object
$user1 = new User('Ashin Indavudha', 30);

echo $user1->name . ' is ' . $user1->age . ' years old' . '<br>';
echo $user1->sayHello() . '<br>';

//create object
$user2 = new User('Ashin', 30);

echo $user2->name . ' is ' . $user2->age . ' years old' . '<br>';
echo $user2->sayHello() . '<br>';


