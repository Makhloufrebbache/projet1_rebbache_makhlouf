<?php
session_start();
require_once("../connexion.php");
require_once("../Functions/User.php");
//Récupérer les champs de formulaire dans des variables de session.
$_SESSION["nomUtilisateur"]=$_POST["nomUtilisateur"];
$_SESSION["mail"]=$_POST["mail"];
$_SESSION["pwd"]=$_POST["pwd"];
$_SESSION["nom"]=$_POST["nom"];
$_SESSION["prenom"]=$_POST["prenom"];

$formsEmpty=verifierDataFormsInscription($_POST,$_POST["nomUtilisateur"],$_POST["mail"],$_POST["pwd"],$_POST["nom"],$_POST["prenom"]);

if ($formsEmpty["isEmpty"]==true) {
   $_SESSION["isEmpty"]=$formsEmpty["isEmpty"];
   $_SESSION["msgErreur"]=$formsEmpty["msg"];
   header('Location: inscription.php');
   die(); 
}
else{
   $userExist=existUser($_POST["nomUtilisateur"]);
   if ($userExist["exist"]) {
      $_SESSION["userExist"]=$userExist["exist"];
      $_SESSION["msg"]=$userExist["msg"];
      header('Location: inscription.php');
      die();
   }
   else  
   {  
      $user=['user_name'=>$_POST["nomUtilisateur"],'email'=>$_POST["mail"],'pwd'=>$_POST["pwd"],'fname'=>$_POST["nom"],'lname'=>$_POST["prenom"]];
      createUser($user);
   }
}

?>