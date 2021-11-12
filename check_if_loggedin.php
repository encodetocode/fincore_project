<?php
session_start();

if(isset($_SESSION["ID"])){
  if($_SESSION["usertype"] == "User"){
    header("location:./User/user_page.php");
    exit();
  }elseif($_SESSION["usertype"] == "Manager"){
    header("location:./Manager/manager_page.php");
exit();
}}