<?php
class Model extends DataBase {
    public function listUsers(){
        return mysqli_query($this->conx,"SELECT * FROM users");
    }
    public function showInfo($id){
        return mysqli_query($this->conx,"SELECT * FROM users WHERE id =".$id);
    }
    public function add(){
        return mysqli_query($this->conx,"INSERT INTO users (fullname,email,photo) VALUES ('".$_REQUEST['fullname']."','".$_REQUEST['email']."','".$_REQUEST['photo']."')");
    }
    public function edit($id){
        return mysqli_query($this->conx,"UPDATE users SET fullname = '".$_REQUEST['fullname']."', email = '".$_REQUEST['email']."', photo = '".$_REQUEST['photo']."'  WHERE id =  " .$id);
    }
    public function delete($id){
        return mysqli_query($this->conx,"DELETE FROM users WHERE id =  " .$id);
    }
    

}