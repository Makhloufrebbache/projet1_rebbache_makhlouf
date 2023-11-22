<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Style/style.css">
<h2>Formulaire de connexion</h2>

<form action="/action_page.php" method="post">
  <div class="">
   <!--  <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
  </div>

  <div class="container">
   <div id="nom">
    <label for="uname">Nom</label>
    <input type="text" placeholder="Entrer votre nom" name="nom">
   </div>
   <div id="prenom">
    <label for="uname">Prénom</label>
    <input type="text" placeholder="Entrer votre prénom" name="prenom">
   </div>
   <div id="adresse">
    <label for="uname">Adresse </label>
    <input type="text" placeholder="Entrer votre nom" name="adresse">
   </div>
   <div id="adresseLivraison">
    <label for="uname">Adresse de livraison</label>
    <input type="text" placeholder="Entrer votre nom" name="adresseLivraison">
   </div>
   <div id="email">
    <label for="uname">Adresse Email</label>
    <input type="text" placeholder="Entrer votre adresse éléctronique" name="mail">
   </div>
   
   <div id="pwd">
    <label for="psw">Password</label>
    <input type="text" placeholder="Entrer votre mot depasse" name="psw" >
    </div> 
    <div> 
    <button type="submit">Login</button>
    </div>
    <div>
    <button type="submit">S'inscrire</button>
    </div>
  </div>
  </div>
</form>

</body>
</html>
