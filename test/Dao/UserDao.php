<?php

class UserDao
{

    public function save($user)
    {
        include("../config/Pdo.php");

        try {

            $sql = "INSERT INTO users (nom, prenom, email, password) VALUES ('" . $user->getNom() . "', '" . $user->getPrenom() . "', '" . $user->getEmail() . "', '" . $user->getPassword() . "')";

            $result = $conn->query($sql);
    
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die;
        }
    }

    public function login($user)
    {
        $loged = false;
        include("../config/Pdo.php");

        try {
            $sql = "select * from users where email = '" . $user->getEmail() . "' and password = '" . $user->getPassword() . "'";

            $conn->query($sql);
            
            $result = $conn->query($sql);
            if ($result->fetchColumn() > 0) {
                $loged = true;
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die;
        }
        return $loged;
    }
}
