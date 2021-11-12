<?php

class Login extends Login_func{

    private $username;
    private $usertype;
    private $password;


    // constructor
    public function __construct(
    $username,
    $usertype,
    $password,
    ){
        $this-> username = $username;
        $this -> usertype = $usertype;
        $this-> password = $password;
        
    }


    public function login(){

        if(!$this -> check_username($this -> username) ==false){
            header("location:../register.php?error=Username must contain atleast 8 characters, and not contain alphabet, white space and numbers.");
            exit();
       }


        $this->getUser($this -> username,$this -> usertype,$this ->password);
    }


    //**this function will check if the username contains anything other than numbers of alphab and must contains at least 8 char
    private function check_username($username){
        if(!preg_match('/^\w{8,}$/', $username)) { 
            return true;
        }else{
            return false;
        }
    }
}