<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Style/style.css">
<h2>Formulaire de connexion</h2>

<form action="./traitementLogin.php" method="post">
  <div class="">
   <!--  <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
  </div>

  <div class="container">
   
   <div id="nomUtilisateur">
    <label >Nom utilisateur</label>
    <input type="text" placeholder="Entrer votre nom d'utilisateur" name="nomUtilisateur">
   </div>
   
   
   <div id="pwd">
    <label>Password</label>
    <input type="text" placeholder="Entrer votre mot depasse" name="psw" >
    </div> 
    <button type="submit">Se connecter</button>
    <button type="submit" formaction="./User/inscription.php">S'inscrire</button>
    </div>
  </div>
  </div>
</form>

</body>
</html>


</body>
</html>
