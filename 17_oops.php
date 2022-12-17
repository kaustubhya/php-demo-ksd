<?php


class User{
// properties are attributes that belong to a class

public  $name;
public $email;
public $password;


// A constructor is a method that runs when an object is created
public function __construct($name, $email, $password)
{
    // echo 'Constructor ran';

    $this->name = $name;
    $this->email = $email;
    $this->password = $password;

    
}





// Method is a function that belongs to a class
function set_name($name){
    $this -> name = $name;

}

function get_name(){
    return $this -> name;
}
}

// Instantiate a user object
$user1 = new User('Bad Boy', 'Badboybb@gmail.com', 8895);
$user2 = new User('Good Boy', 'goodboy@gmail.com', 741);

// echo $user1->email;
// echo $user2->password;



// $user1 -> set_name('Brad Buttowski => Kya Baat hai Brad 😎');
// $user2 -> set_name('Kick Buttowski => Machāyenge 😎');

// var_dump($user2);

// echo $user1 -> get_name();

// echo $user2 -> get_name();




// Inheritance

class Employee extends User{
    public function __construct($name, $email, $password, $title){
        parent::__construct($name, $email, $password);    // :: is like 'super' keyword
        $this->title = $title;
    }
    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee('Sushma', 'sushbabe@orkut.com', 456789, 'Cleaner');
echo $employee1->get_title();

?>