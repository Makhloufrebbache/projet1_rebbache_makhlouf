<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Style/style.css">
<h2>Formulaire d'inscription</h2>

<form action="./traitementInscription.php" method="post">
 
  <div class="container">
   <div id="nom">
    <label >Nom</label>
    <input type="text" placeholder="Entrer votre nom" name="nom">
   </div>
   <div id="prenom">
    <label >Prénom</label>
    <input type="text" placeholder="Entrer votre prénom" name="prenom">
   </div>
   <div id="nomUtilisateur">
    <label >Nom utilisateur</label>
    <input type="text" placeholder="Entrer votre nom d'utilisateur" name="nomUtilisateur">
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
    <label >Adresse Email</label>
    <input type="text" placeholder="Entrer votre adresse éléctronique" name="mail">
   </div>
   
   <div id="pwd">
    <label>Password</label>
    <input type="text" placeholder="Entrer votre mot depasse" name="pwd" >
    </div> 
    <button type="submit">S'inscrire</button>
    </div>
  </div>
  </div>
</form>

</body>
</html>
