<?php

//get data
if(isset($_POST["login"])){

    $username = $_POST["username"];
    $usertype = $_POST["usertype"];
    $password = $_POST["password"];


    //login_func
    include '../database.php';
    include __DIR__ . '/Login_db_func.php';
    include __DIR__ . '/Login.php';
    $login = new Login($username,$usertype,$password);


    //logging user
    $login -> login();

    //location
    if($usertype == "Manager"){
    header("location:../Manager/manager_page.php");
    exit();
    }elseif($usertype == "User"){
        header("location:../User/user_page.php");
        exit();
    }
}