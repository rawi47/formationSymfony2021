<?php
include("entity/User.php");

$user = new User();

$user->setId(1);
$user->setNom($_POST['name']);
