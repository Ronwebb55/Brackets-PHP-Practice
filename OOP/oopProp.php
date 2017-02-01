<?php
class User{

    //properties

    public $id = 33;
    public $username;
    public $email;
    public $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;

       // echo 'Constructor Called' . "<br>";
    }

    public function register(){
        echo 'User Register' . "<br>";
    }

    public function login(){
        $this->auth_user();
    }
    public function auth_user(){
         echo $this->username. ' is authenticated' . "<br>";


    }

    public function __destruct(){
        echo "Destructor called";

    }

}

$User = new User("Ronnie", '1234');

//$User->register();
$User->login();

