<?php

class User extends User_func{
    //properties
    private $username;

    //personal information
    private $firstname;
    private $lastname;
    private $birthdate;
    private $nationality;
    private $country;
    private $address;

    // contact information
    private $email;
    private $phonenumber;

    // constructor
    // public function __construct(
    // $username,
    // $firstname,
    // $lastname,
    // $birthdate,
    // $nationality,
    // $country,
    // $address,
    // $email,
    // $phonenumber,
    // ){
    //     $this-> username = $username;
    //     $this-> firstname = $firstname;
    //     $this-> lastname = $lastname;
    //     $this-> birthdate = $birthdate;
    //     $this-> nationality = $nationality;
    //     $this-> country = $country;
    //     $this-> address = $address;
    //     $this-> email = $email;
    //     $this-> phonenumber = $phonenumber;
        
    // }

    public function update_user($username, $firstname,$lastname,$birthdate,$nationality,$country,$address,$email,$phonenumber){

        $this -> updateuser($username, $firstname,$lastname,$birthdate,$nationality,$country,$address,$email,$phonenumber);


    }


    public function get_userdata($username){


        return $this -> getuserData($username);
    }
}