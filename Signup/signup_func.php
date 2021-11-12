<?php

// print_r($_POST["signup"]);
//init data
if(isset($_POST["signup"])){

    $user = $_POST["username"];
    $usertype = $_POST["usertype"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["repeated_password"];


    //signup_func
    include '../database.php';
    include __DIR__ . '/Signup_db_func.php';
    include __DIR__ . '/Signup.php';
    $signup = new Signup($user,$usertype,$firstname,$lastname,$email,$password,$repassword);


    //adding user
    $signup -> signup();

    //location
    header("location:../index.php?error=none");
    echo $signup;

    exit();
}