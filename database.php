<?php

class database{
    

    protected function connect(){
        try{
            $username = "root";
            $password = "";

            $conn = new PDO("mysql:host=localhost;dbname=fincore_database", $username, $password);
            // set the PDO error mode to exception
            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            return $conn;

          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
          }
    }
}