<?php


class Login_func extends database{

    protected function getUser($username, $type , $password){
        
        if($type == "Manager"){
            $statement = $this->connect()->prepare('SELECT _password FROM managers WHERE username = ?');
            
            if(!$statement -> execute(array($username))){
              $statement = null;
              header("location:../index.php?error=statmentfailed_addmanager");
              exit();
            }

            
            if($statement -> rowCount() == 0){
                $statement = null;
                header("location:../index.php?error=Username is not found");
                exit();
            }

            $hashed_password = $statement-> fetchAll(PDO::FETCH_ASSOC);
            $checkPassword = password_verify($password,$hashed_password[0]["_password"]);
            

            if($checkPassword == false){
                $statement = null;
                header("location:../index.php?error=Password is not correct");
                exit(); 
            }elseif($checkPassword == true){

            $statement = $this->connect()->prepare('SELECT * FROM managers WHERE username = ?');
            
            if(!$statement -> execute(array($username))){
              $statement = null;
              header("location:./index.php?error=statmentfailed_addmanager");
              exit();
            }

            $data = $statement -> fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["ID"] = $data[0]["ID"];
            $_SESSION["username"] = $data[0]["username"];
            $_SESSION["usertype"] = $type;
            $_SESSION["firstname"] = $data[0]["firstname"];
            $_SESSION["lastname"] = $data[0]["lastname"];


            }
            //close the statement if its true and got added
            $statement = null;
        }
  
  
        if($type == "User"){
          $statement = $this->connect()->prepare('SELECT _password FROM users WHERE username = ?');
            
          if(!$statement -> execute(array($username))){
            $statement = null;
            header("location:../index.php?error=statmentfailed_addmanager");
            exit();
          }

          
          if($statement -> rowCount() == 0){
              $statement = null;
              header("location:../index.php?error=Username is not found");
              exit();
          }

          $hashed_password = $statement-> fetchAll(PDO::FETCH_ASSOC);
          $checkPassword = password_verify($password,$hashed_password[0]["_password"]);

          if($checkPassword == false){
              $statement = null;
              header("location:../index.php?error=Password is not correct");
              exit(); 
          }elseif($checkPassword == true){

          $statement = $this->connect()->prepare('SELECT * FROM users WHERE username = ?');
          
          if(!$statement -> execute(array($username))){
            $statement = null;
            header("location:../index.php?error=statmentfailed_addmanager");
            exit();
          }

          $data = $statement -> fetchAll(PDO::FETCH_ASSOC);

          session_start();
          $_SESSION["ID"] = $data[0]["ID"];
          $_SESSION["username"] = $data[0]["username"];
          $_SESSION["usertype"] = $type;
          $_SESSION["firstname"] = $data[0]["firstname"];
          $_SESSION["lastname"] = $data[0]["lastname"];


          }
          //close the statement if its true and got added
          $statement = null;
      }
    }
}