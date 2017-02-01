<?php

class First{

    public $id = 23;
    public $name = 'John Doe';

    public function saySomething(){
        echo 'Something';
    }
}

class Second extends First{


}


$second = new Second;
echo $second->saysomething();
