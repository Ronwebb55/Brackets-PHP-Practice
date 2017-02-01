<?php

class people{

    public $person1 = "mike";
    public $person2 = "shelly";
    public $person3 = "Larry";
    protected $person4 = "steve";
    private $person5 = "john";


    function iterateObject(){

        foreach($this as $key => $value){

            print "$key => $value\n";
        }
    }
}

$people = new people;
$people->iterateObject();
