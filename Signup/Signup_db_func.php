<?php


class Signup_func extends database{

    protected function addUser($username, $type ,$firstname, $lastname ,$email, $password){
        
        // first have to hash the password
        $hashed_password = password_hash($password,PASSWORD_DEFAULT);
        // $log = array($username,$firstname,$lastname,$email,$hashed_password);
        // console_log($log);
        if($type == "Manager"){
            $statement = $this->connect()->prepare('INSERT INTO managers (username,firstname,lastname,email,_password) VALUES  (?,?,?,?,?);');
            
            if(!$statement -> execute(array($username,$firstname,$lastname,$email,$hashed_password))){
              $statement = null;
              header("location:../register.php?error=statmentfailed_addmanager");
              exit();
            }
            
            //close the statement if its true and got added
            $statement = null;
        }
  
  
        if($type == "User"){
          $statement = $this-> connect() -> prepare('INSERT INTO users (username,firstname,lastname,email,_password) VALUES (? , ? , ? ,? ,?);');
  
          if(!$statement -> execute(array($username,$firstname,$lastname,$email,$hashed_password))){
            $statement = null;
            header("location:../register.php?error=statmentfailed_adduser");
            exit();
          }
          
          //close the statement if its true and got added
          $statement = null;
      }
    }




    //first check if the user type then check if it exists in the database (can be used in two conditions if the user taken for sign up and exists for login)
    protected function checkUser($username,$type){
        if($type == "Manager"){
            $statement = $this-> connect() -> prepare('SELECT username FROM managers WHERE username = ?;');
  
            if(!$statement -> execute(array($username))){
              $statement = null;
              header("location:../register.php?error=statmentfailed");
              exit();
            }
            
            $result;
            if($statement -> rowCount() > 0){
              $result =  true;
            }else{
              $result =  false;
            }
  
            return $result;
        }
  
  
        if($type == "User"){
          $statement = $this-> connect() -> prepare('SELECT username FROM users WHERE username = ?;');
  
          if(!$statement -> execute(array($username))){
            $statement = null;
            header("location:../register.php?error=statmentfailed");
            exit();
          }
          
          $result;
          if($statement -> rowCount() > 0){
            $result =  true;
          }else{
            $result =  false;
          }
  
          return $result;
      }
}

    //first check if the user type then check if it exists in the database (can be used in two conditions if the user taken for sign up and exists for login)
    protected function checkEmail($email ,$type){
        if($type == "Manager"){
            $statement = $this-> connect() -> prepare('SELECT email FROM managers WHERE email = ?;');
  
            if(!$statement -> execute(array($email))){
              $statement = null;
              header("location:../register.php?error=statmentfailed");
              exit();
            }
            
            $result;
            if($statement -> rowCount() > 0){
              $result =  true;
            }else{
              $result =  false;
            }
  
            return $result;
        }
  
  
        if($type == "User"){
          $statement = $this-> connect() -> prepare('SELECT email FROM users WHERE email = ?;');
  
          if(!$statement -> execute(array($email))){
            $statement = null;
            header("location:../register.php?error=statmentfailed");
            exit();
          }
          
          $result;
          if($statement -> rowCount() > 0){
            $result =  true;
          }else{
            $result =  false;
          }
  
          return $result;
      }
}
}