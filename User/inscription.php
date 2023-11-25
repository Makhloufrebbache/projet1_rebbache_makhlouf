<?php 
 session_start();

if(isset($_SESSION["nomUtilisateur"])&& (!empty($_SESSION["nomUtilisateur"]))){
 $usernameUser=$_SESSION["nomUtilisateur"];
 $labelColor1= '';
 $borderColor1='';
}
elseif(isset($_SESSION["nomUtilisateur"])&& (empty($_SESSION["nomUtilisateur"]))){
 $labelColor1= 'style = "color: red"';
 $borderColor1='style = "border-color: red; border-width: 2px"';
 $usernameUser='';
}
else{
 $usernameUser='';
 $labelColor1= '';
 $borderColor1='';
}
if(isset($_SESSION["mail"])&& (!empty($_SESSION["mail"]))){
 $mailUser=$_SESSION["mail"];
 $labelColor2= '';
 $borderColor2='';
}
elseif(isset($_SESSION["mail"]) && (empty($_SESSION["mail"]))){
 $labelColor2= 'style = "color: red"';
 $borderColor2='style = "border-color: red; border-width: 2px"';
 $mailUser='';
}
else{
 $mailUser='';
 $labelColor2= '';
 $borderColor2='';
}
if(isset($_SESSION["pwd"])&& (!empty($_SESSION["pwd"]))){
 $pwdUser=$_SESSION["pwd"];
 $labelColor3= '';
 $borderColor3='';
}
elseif(isset($_SESSION["pwd"])&& (empty($_SESSION["pwd"]))){
$labelColor3= 'style = "color: red"';
$borderColor3='style = "border-color: red; border-width: 2px"';
$pwdUser='';
}
else{
 $pwdUser='';
 $labelColor3= '';
 $borderColor3='';
}

if(isset($_SESSION["nom"])&& (!empty($_SESSION["nom"]))){
 $nomUser=$_SESSION["nom"];
 $labelColor4= '';
 $borderColor4='';
}
elseif(isset($_SESSION["nom"])&& (empty($_SESSION["nom"]))){
$labelColor4= 'style = "color: red"';
$borderColor4='style = "border-color: red; border-width: 2px"';
$nomUser='';
}
else{
 $nomUser='';
 $labelColor4= '';
 $borderColor4='';
}
if(isset($_SESSION["prenom"]) && (!empty($_SESSION["prenom"]))){
 $prenomUser=$_SESSION["prenom"];
 $labelColor5= '';
 $borderColor5='';
}
elseif(isset($_SESSION["prenom"]) && (empty($_SESSION["prenom"]))){
$labelColor5= 'style = "color: red"';
$borderColor5='style = "border-color: red; border-width: 2px"';
$prenomUser='';
}
else{
 $prenomUser='';
 $labelColor5= '';
 $borderColor5='';
}
if( isset($_SESSION["isEmpty"])){
   $msgErreur=$_SESSION["msgErreur"];
}
else{
  $msgErreur='';
}
if(isset($_SESSION["userExist"])&& $_SESSION["userExist"]){
   $msgUserExit=$_SESSION["msg"];
   $colorUserExist='style = "color: red"';
}
else{
   $msgUserExit="";
   $colorUserExist='';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Style/style.css">
<h2>Formulaire d'inscription</h2>

<form action="./traitementInscription.php" method="post">
 <p id="msgErreur"><?php echo $msgErreur; ?></p>
 <p echo id="msgErreur" ><?php echo $msgUserExit; ?></p>

  <div class="container">
   <div id="nom">
    <label <?php echo $labelColor4?> >Nom</label>
    <input type="text" <?php echo $borderColor4 ?> placeholder="Entrer votre nom" name="nom" value=<?php echo $nomUser ?>>
   </div>
   <div id="prenom">
    <label <?php echo $labelColor5 ?> >Prénom</label>
    <input <?php echo $borderColor5 ?> type="text" placeholder="Entrer votre prénom" name="prenom" value=<?php echo $prenomUser ?>>
   </div>
   <div id="nomUtilisateur">
    <label <?php echo $labelColor1?> >Nom utilisateur</label>
    <input type="text" <?php echo $colorUserExist ?> <?php echo $borderColor1 ?> placeholder="Entrer votre nom d'utilisateur" name="nomUtilisateur" value=<?php echo $usernameUser ?>>
   </div>
   <div hidden id="adresse">
    <label >Adresse </label>
    <input type="text" placeholder="Entrer votre nom" name="adresse">
   </div>
   <div hidden id="adresseLivraison">
    <label >Adresse de livraison</label>
    <input type="text" placeholder="Entrer votre nom" name="adresseLivraison">
   </div>
   <div id="email">
    <label <?php echo $labelColor2 ?> >Adresse Email</label>
    <input type="text" <?php echo $borderColor2 ?> placeholder="Entrer votre adresse éléctronique" name="mail" value=<?php echo $mailUser ?>>
   </div>
   
   <div id="pwd">
    <label <?php echo $labelColor3 ?> >Password</label>
    <input type="text" <?php echo $borderColor3 ?> placeholder="Entrer votre mot depasse" name="pwd" value=<?php echo $pwdUser ?> >
    </div> 
    <button type="submit">S'inscrire</button>
    </div>
  </div>
  </div>
</form>

</body>
</html>

<?php 
session_destroy();
?>
