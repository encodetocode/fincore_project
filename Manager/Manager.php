<?php

class Manager extends Manager_func{

    //return all users data to be displayed in frontend
    public function getusers(){

        return $this -> getallUsers();
    }
    //delete selected user by username
    public function delete($username){

        $this -> deleteUser($username);
    }
}