<?php
session_start();
require_once("../connexion.php");
require_once("../Functions/User.php");
$user=['billing_address_id'=>$_POST["adresse"],'shipping_address_id'=>$_POST["adresseLivraison"],'user_name'=>$_SESSION["login"]];
updateUser($user);
?>