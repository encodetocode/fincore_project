<?php

session_start();

if(isset($_POST["update"])){

    $username = $_SESSION['username'];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $birthdate = $_POST["birthdate"];
    $country = $_POST["country"];
    $nationality = $_POST["nationality"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];


    //include files
    include '../database.php';
    include '../User/User_db_func.php';
    include '../User/User.php';
    $user = new User();
    $user -> update_user($username, $firstname,$lastname,$birthdate,$nationality,$country,$address,$email,$phonenumber);

    header("location: ./user_profile.php?error=none");
    exit();


}   