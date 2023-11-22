<?php
session_start();
require_once("../connexion.php");
require_once("./functionsUser.php");

$tab=['user_name'=>"makh",  
       'email'=>"makh",
       'pwd'=>"makh",
       'fname'=>"makh",
       'lname'=>"makh"];
   
 createUser($tab);
 ?>

