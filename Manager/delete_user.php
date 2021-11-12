<?php 
session_start();
if(isset($_SESSION["ID"])){
    if($_SESSION["usertype"] == "User"){
        header("location:../User/user_page.php");
        exit();
      }
  
    include '../database.php';
    include './Manager_db_func.php';
    include './Manager.php';
  
    $manager = new Manager();
    
    $username = $_GET["username"];

    $manager -> delete($username);


}
    
