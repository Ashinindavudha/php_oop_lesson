<?php 
//define a class
class User {
// properties (attribute)

//public $name = 'Ashin';
public $name;
//methods (function)
public function sayHello(){
    //return 'Hello';
    return $this->name . 'Says Hello';
}
}
// instatiate a user object from the user class

$user1 = new User();
$user1->name = 'Ashin Indavudah';
echo $user1->name . '<br>';
//class method call
echo $user1->sayHello() . '<br>';


//Create new user

$user2 = new User();
$user2->name = 'Ashin';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();