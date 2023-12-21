<?php
require_once("../Functions/User.php");
require_once("../connexion.php");
session_start();
//Juste pour récupérer le style de l'interface modifyUser.
$_SESSION["user_name"]=$_GET['name'];
header('Location: ../modifyUser.php');
?>