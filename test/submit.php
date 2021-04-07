<?php
session_start();
$email = $_POST['email'];
$email = $_POST['message'];
$email = $_POST['name'];

$_SESSION["email"] = $email;
$_SESSION["message"] = $email;
$_SESSION["name"] = $email;

header("Location:index.php");

