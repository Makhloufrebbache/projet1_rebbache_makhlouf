<?php
session_start();
require_once("../Functions/User.php");
require_once("../connexion.php");
$users=getUser($_SESSION["user_name"]);
foreach ($users as $user) {
    $lname= $user["lname"];
    $fname= $user["fname"];
    $email= $user["email"];
    $user_name=$user["user_name"];
    $password=$user["pwd"];
}
$roles=getRoles();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>User</title>

</head>
<body>
  <h2>Modification utilisateur</h2>
<form action="./traitementInscription.php" method="post">
  <div class="container">
   <div id="nom">
    <label  >Nom</label>
    <input type="text"  placeholder="Entrer votre nom" name="nom" value=<?php echo $lname  ?>>
   </div>
   <div id="prenom">
    <label >Prénom</label>
    <input  type="text" placeholder="Entrer votre prénom" name="prenom" value=<?php echo $fname ?>>
   </div>
   <div id="nomUtilisateur">
    <label <?php ?> >Nom utilisateur</label>
    <input type="text" placeholder="Entrer votre nom d'utilisateur" name="nomUtilisateur" value=<?php echo $user_name   ?>>
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
    <label <?php ?> >Adresse Email</label>
    <input type="text" <?php  ?> placeholder="Entrer votre adresse éléctronique" name="mail" value=<?php echo $email ?>>
   </div>
   <div id="pwd">
    <label <?php ?> >Password</label>
    <input type="text" <?php ?> placeholder="Entrer votre mot depasse" name="pwd" value=<?php echo  $password ?> >
   <div>
   <div id="role">
     <label <?php ?> >Role</label>
      <select  name="role" id="role_select"   >
    		<option value=""> - - - Choisissez le role - - -</option>
    			<?php
						foreach($roles as $role): 
    					?>  
    						<option value="<?php echo($role['id']); ?>" <?php if($user["role_id"]==$role['id'])echo 'selected="selected" ';?> ><?php echo($role['name']); ?></option>
    					<?php
						 endforeach;
    			   ?>
    	</select>
    </div> 
    <div id="btn_modif"> 
    <button type="submit">Modifier</button>
    </div>
  </div>
  </div>
</form>
</body>
</html>
 