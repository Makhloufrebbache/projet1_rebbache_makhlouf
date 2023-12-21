<?php
session_start();
require_once("../connexion.php");
require_once("../Functions/User.php");
//Mise à jours de l'utilisateur à partir de son profils
$user=['billing_address_id'=>$_POST["adresse"],'shipping_address_id'=>$_POST["adresseLivraison"],'user_name'=>$_SESSION["login"]];
updateUser($user);
header('Location: ../Articles/indexArticle.php');
?>