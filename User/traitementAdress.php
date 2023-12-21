<?php
require_once("../connexion.php");
require_once("../Functions/User.php");
session_start();
//Récupérer id de l'adresse
$id=createAdress($_POST);
$adress=['billing_address_id'=>$id,'shipping_address_id'=>$id,'user_name'=>$_SESSION["login"]];
//Mettre à jours les adresses dans la table adresse
updateUserAdress($adress,$id);
header('Location: ../Articles/indexArticle.php');

?>