<?php
require_once("../Functions/User.php");
require_once("../connexion.php");

$user=$_POST;
updateUserByAdmin($user);
header('Location: ./Users.php');
?>