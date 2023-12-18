<?php
session_start();
require_once("../connexion.php");
require_once("../Functions/User.php");
//Vérification de formulaire
$formsEmptyLogin=verifierDataFormsLogin($_POST,$_POST["login"],$_POST["password"]);
if ($formsEmptyLogin["isEmpty"]==true) {
   $_SESSION["isEmptylogin"]= $formsEmptyLogin["isEmpty"];
   $_SESSION["msgErreurLoginEmpty"]=$formsEmptyLogin["msg"];
   header('Location: login.php');
   die(); 
}
//
else{
   $userAuthentication= authenticatedUser($_POST["login"],$_POST["password"]);
   if (!$userAuthentication["auth"]) {
      $_SESSION["userAuthentification"]=$userAuthentication["auth"];
      $_SESSION["msgAuth"]=$userAuthentication["msg"];
      header('Location: login.php');
      die();
     }else{  
      $_SESSION["login"]=$_POST["login"];
      $user=['token'=>rand(1000,2000),'user_name'=>$_POST["login"]];
//Ajout de token
      updateUserSetToken($user);
      header('Location: ../Articles/indexArticle.php');
   } 
}
?>