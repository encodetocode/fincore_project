<?php

class Manager extends Manager_func{


    public function getusers(){

        return $this -> getallUsers();
    }

    public function delete($username){

        $this -> deleteUser($username);
    }
}