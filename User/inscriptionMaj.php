<?php 

session_start();
require_once("../connexion.php");
require_once("../Functions/User.php");
//Récupérer les informations de l'utilisateur à mettre à jours et les affecter à des variables
if(isset($_SESSION["login"])){
$users=getUser($_SESSION["login"]);
foreach ($users as $user) {
    $nameMaj= $user["lname"];
    $prenomMaj=$user["fname"];
    $mailMaj=$user["email"];
}}
else{
   $nameMaj= " ";
    $prenomMaj="";
    $mailMaj="";  

}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Style/style.css">
<h2>Formulaire de mise à jours profil</h2>
<!--Formulaire de mise à jours de profil utilisateur -->
<form action="./traitementInscriptionMaj.php" method="post">

  <div class="container">
   <div id="nom">
    <label <?php  ?> >Nom</label>
    <input type="text" <?php  ?> placeholder="Entrer votre nom" name="nom" value=<?php echo $nameMaj ?>>
   </div>
   <div id="prenom">
    <label <?php  ?> >Prénom</label>
    <input <?php ?> type="text" placeholder="Entrer votre prénom" name="prenom" value=<?php echo $prenomMaj?>>
   </div>
   <div hidden id="nomUtilisateur">
    <label  >Nom utilisateur</label>
    <input type="text"  placeholder="Entrer votre nom d'utilisateur" name="nomUtilisateur" >
   </div>
   <div  id="adresse">
    <label >Adresse </label>
    <input type="text" placeholder="Entrer votre nom" name="adresse">
   </div>
   <div  id="adresseLivraison">
    <label >Adresse de livraison</label>
    <input type="text" placeholder="Entrer votre nom" name="adresseLivraison">
   </div>
   <div id="email">
    <label <?php ?> >Adresse Email</label>
    <input type="text" <?php ?> placeholder="Entrer votre adresse éléctronique" name="mail" value=<?php echo $mailMaj ?>>
   </div>
   
   <div hidden id="pwd">
    <label >Password</label>
    <input type="text"  placeholder="Entrer votre mot depasse" name="pwd"  >
    </div> 
    <button type="submit">Enregister</button>
    </div>
  </div>
  </div>
</form>

</body>
</html>

<?php 

?>
