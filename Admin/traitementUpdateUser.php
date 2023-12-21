<?php
require_once("../Functions/User.php");
require_once("../connexion.php");
//récupérer les nouvelles information dans la variable user.
$user=$_POST;
//Mise à jours de l'utilisateur en question
updateUserByAdmin($user);
header('Location: ./Users.php');
?>