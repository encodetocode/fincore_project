<?php

class User_func extends database{

    protected function updateuser($username, $firstname,$lastname,$birthdate,$nationality,$country,$address,$email,$phonenumber){

        $statement = $this -> connect() -> prepare('UPDATE users SET firstname = ?, lastname = ?, birthdate = ?, nationality = ?, country = ? , address = ?, email = ? , phonenumber = ? WHERE username = ?;');

        if(!$statement -> execute(array($firstname,$lastname,$birthdate,$nationality,$country,$address,$email,$phonenumber,$username))){
            $statement = null;
            header("location:../user_page.php?error=statmentfailed_addmanager");
            exit();
        }

        
        
        $statement = null;
    }

    protected function getuserData($username){
        $statement = $this -> connect() -> prepare('SELECT * FROM users WHERE username = ?;');

        if(!$statement -> execute(array($username))){
            $statement = null;
            header("location:../user_page.php?error=statmentfailed_addmanager");
            exit();
        }
        
        $data;
        if($statement -> rowCount() > 0){
            $data = $statement -> fetchAll(PDO::FETCH_ASSOC);
        }
        $statement = null;
        
        $_SESSION["firstname"] = $data[0]["firstname"];
        $_SESSION["lastname"] = $data[0]["lastname"];
        return $data;

    }
}