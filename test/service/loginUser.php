<?php
session_start();
include("../entity/User.php");
include("../Dao/UserDao.php");

$user = new User();

$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);


$userDao = new UserDao();


$logged = $userDao->login($user);
if($logged){
    echo "login";
    die;
}

header("Location:../index.php");