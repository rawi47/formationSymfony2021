<?php

class UserDao
{

    public function save($user)
    {
        include("../config/Pdo.php");

        try {

            $sql = "INSERT INTO users (nom, prenom, email, password) VALUES ('" . $user->getNom() . "', '" . $user->getPrenom() . "', '" . $user->getEmail() . "', '" . $user->getPassword() . "')";

            $conn->query($sql);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die;
        }
    }
}
