<?php
require_once("../Functions/User.php");
require_once("../connexion.php");
session_start();
$_SESSION["user_name"]=$_GET['name'];
header('Location: ../modifyUser.php');
?>