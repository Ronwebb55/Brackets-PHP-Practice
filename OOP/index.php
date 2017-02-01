<?php

spl_autoload_register(function($class_name){
    include $class_name. '.php';
});

$foo = new foo;
$bar = new bar;

$foo->sayHello();
$bar->sayHI();
