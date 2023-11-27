
<?php
session_start();
if(isset($_SESSION["isEmptylogin"])){
$msgErreurLoginEmpty=$_SESSION["msgErreurLoginEmpty"];
 }
else{
$msgErreurLoginEmpty=""; 
}
if(isset($_SESSION["userAuthentification"])){
$msgErreurLoginAuth=$_SESSION["msgAuth"];
 }
else{
$msgErreurLoginAuth=""; 
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Style/style.css">
<h2>Formulaire de connexion</h2>

<form action="./traitementLogin.php" method="post">
  <p id="msgErreur"><?php echo $msgErreurLoginEmpty; ?></p>
  <p id="msgErreur"><?php echo $msgErreurLoginAuth; ?></p>
  <div class="container">
   <div id="nomUtilisateur">
    <label >Nom utilisateur</label>
    <input type="text" placeholder="Entrer votre nom d'utilisateur" name="login">
   </div>
   <div id="pwd">
    <label>Password</label>
    <input type="text" placeholder="Entrer votre mot depasse" name="password" >
    </div> 
    <button type="submit">Se connecter</button>
    <button type="submit" formaction="./inscription.php">S'inscrire</button>
    </div>
  </div>
  </div>
</form>

</body>
</html>
</body>
</html>
<?php 
 session_destroy();
?>