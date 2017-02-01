<?php
class User{
    public static $minPassLength = 5;

    public static function validatePassword($password){
        if(strlen($password) >= self::$minPassLength){

            return true;
        }else{

            return false;
        }



    }
}


$password = 'passwe';

if(user::validatePassword($password)){

    echo 'Password is valid';

}else{

    echo 'password is not valids';
}
