<?php
include("../entity/User.php");
include("../Dao/UserDao.php");

$user = new User();

$user->setId(1);
$user->setNom($_POST['name']);
$user->setPrenom($_POST['prenom']);
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);

$userDao = new UserDao();
$userDao->save($user);

header("Location:../index.php");
