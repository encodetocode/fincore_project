<?php 

class Manager_func extends database{


    protected function getallUsers(){
        $statement = $this -> connect() ->prepare('SELECT * FROM users;');

        if(!$statement -> execute()){
            $statement = null;
            header("location:../manager_page.php?error=statmentfailed_addmanager");
            exit();
        }
        $data;
        if($statement -> rowCount() == 0){
            $result = "there are no users";
        }elseif($statement -> rowCount() > 0){
            $data = $statement -> fetchAll(PDO::FETCH_ASSOC);
        }

        $statement = null;

        return $data;
    }



    protected function deleteUser($username){
        $statement = $this -> connect() -> prepare('DELETE FROM users WHERE username = ?');

        if(!$statement -> execute(array($username))){
            $statement = null;
            header("location:../manager_page.php?error=statmentfailed_addmanager");
            exit();
        }
        $statement = null;
        header("location:./manager_getusers.php?error=none");
        exit();
    }
}