<?php

class Signup extends Signup_func{
    //properties
    private $username;
    private $usertype;
    private $password;
    // repeated passsword
    private $repassword;

    //personal information
    private $firstname;
    private $lastname;

    // contact information
    private $email;

    // constructor
    public function __construct(
    $username,
    $usertype,
    $firstname,
    $lastname,
    $email,
    $password,
    $repassword
    ){
        $this-> username = $username;
        $this -> usertype = $usertype;
        $this-> firstname = $firstname;
        $this-> lastname = $lastname;
        $this-> email = $email;
        $this-> password = $password;
        $this-> repassword = $repassword;

        
    }


    public function signup(){

        if(!$this -> check_username($this -> username) ==false){
            header("location:../register.php?error=Username must contain atleast 8 characters, and not contain alphabet, white space and numbers.");
            exit();
       }

        if($this -> checkUser($this -> username,$this -> usertype) == true){
            header("location:../register.php?error=Username is already taken");
            exit();
        }
        if($this -> checkEmail($this -> email,$this -> usertype) == true){
            header("location:../register.php?error=Email is already taken");
            exit();
        }

        if($this -> check_matchPassword($this -> password,$this -> repassword) == false){
            header("location:../register.php?error=Passwords are not matched.");
            exit();
        }


        $this->addUser($this -> username,$this -> usertype,$this -> firstname,$this -> lastname,$this->email,$this ->password);
    }


    //**this function will check if the username contains anything other than numbers of alphab and must contains at least 8 char
    private function check_username($username){
        if(!preg_match('/^\w{8,}$/', $username)) { 
            return true;
        }else{
            return false;
        }
    }

    // check if the passwords matches
    private function check_matchPassword($password , $repassword ){
        $result;
        if($password !== $repassword){
            $result =  false;
        }else{
            $result = true;
        }

        return $result;
    }
}