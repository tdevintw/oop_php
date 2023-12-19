<?php
require 'connection.php';
class crud extends DataBase{
    public function getUser($user_name , $email){
        $sql = "SELECT * FROM users WHERE user_name = ? AND gmail = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_name , $email]);
        $names = $stmt->fetchAll();

        foreach($names as $name){
            echo $name['id'].'<br>';
        }
    }

    public function addUser($user_name, $email){
        $sql = "INSERT INTO users(user_name , gmail) VALUES(?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_name , $email]);
    }

    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    public function updatUser( $user_name , $email, $id){
        $sql = "UPDATE users SET user_name = ? , gmail = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_name , $email , $id]);
       }
    }