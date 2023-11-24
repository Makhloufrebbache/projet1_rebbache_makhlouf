<?php
session_start();
require_once("../connexion.php");
require_once("../Functions/User.php");

$userExist=existUser($_POST["nomUtilisateur"]);
var_dump($userExist);
if ($userExist["exist"]) {
    echo $userExist["msg"];
}
else  
{  
    $user=['user_name'=>$_POST["nomUtilisateur"],'email'=>$_POST["mail"],'pwd'=>$_POST["pwd"],'fname'=>$_POST["nom"],'lname'=>$_POST["prenom"]];
    createUser($user);
    echo $userExist["msg"];
}
?>