<?php

namespace Models;

class UserModel extends Database {

    public function get($username, $password) {
        $password = md5($password);

        $stm = $this->connection->prepare('SELECT * 
                                            FROM users 
                                            WHERE username = :username
                                            AND password = :password');
        $stm->bindParam(':username', $username);
        $stm->bindParam(':password', $password);
        $stm->execute();
        
        return $stm->fetch();
    }
    
}