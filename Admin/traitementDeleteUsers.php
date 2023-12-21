<?php 
//Traitement de la suppession d'un utilisateur
require_once("../Functions/User.php");
require_once("../connexion.php");
//Récuper le username de l'utilisateur
$username = $_GET['name'];
//Supprimer l'utilisateur et retour automatique à la liste des utilisateurs.
deleteUser($username);
header('Location: ../Users.php'); 
?>