<?php 
session_start();

if(isset($_SESSION['panier'])&isset($_POST['prix'])){

$_SESSION['panier'][$_SESSION['id']]=["id"=>$_SESSION['id'],"prix"=>$_POST['prix'],"qte"=>$_POST['qte'],"prixTotal"=>$_POST['prix'] * $_POST['qte'],"name"=>$_POST['name']];
}
else{
  $_SESSION['panier']=[];
}

require_once("../Functions/Article.php");
require_once("../Functions/User.php");
require_once("../connexion.php");
$articles = articles();
//récupérer l'id de role de l'utilisateur
$users=getUser($_SESSION["login"]);
foreach ($users as $user) {
    $userRole= $user["role_id"];
}

//Affichage du tableau de bord utilisateur
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>Produit</title>
</head>
<body>
<div id ="nav_barre">
<div id ="nav_barre1">
  <div id ="div_btn_profile"><a href="./listeCommande.php" >Commandes</a></div>
  <?php if ($userRole != 3) { ?>
  <div id ="div_btn_profile"><a href="../Admin/Products.php" >Gestion produits</a></div>
  <div id ="div_btn_profile"><a href="../Admin/Users.php" >Gestion utilisateur</a></div> <?php } ?>
</div>
<div id ="nav_barre2">
  <div id ="div_btn_profile"><a href="../User/adresse.php" >Mes adresses</a></div>
  <div id ="div_btn_profile"><a href="../User/inscriptionMaj.php" ><?php echo $_SESSION["login"] ?></a></div>
  <div id ="div_btn_profile"><a href="../index.php" >Déconnexion</a></div>
</div> 
</div> 
<!--   Récuprer la liste des articles de la table product  -->
  <div class="produit">
        <div class="container_article">
                <?php foreach ($articles as $article ) { ?>
                <div class="container_data">
                    <div class="img_article">
                       <img id="img" src="<?php echo $article["img_url"]?>" alt=" <?php echo $article["img_url"]?>">
                    </div>
                    <div class="container_data_div" >
                       <div class="td_text"><strong>Marque:</strong><?php echo $article["name"]?></div>
                       <div class="td_text"><strong>Description:</strong><?php echo $article["description"]?></div>
                       <div class="td_text"><strong>Prix:</strong><?php echo $article["price"]?></div>
                       <a href="./page.php/?id=<?php echo $article["id"]?>"><div><button id="Ajouter_panier">Voir plus</button></div></a>
                    </div> 
                </div>
                <br>
             <?php }?>
        </div>
        <div class="panier">
          <div id="MonPanier"><h2>Mon panier</h2></div>
          <table>
           <tr>
             <th>id</th>
             <th>Produit</th>
             <th>Quantité</th>
             <th>Prix U</th>
             <th>Prix produit</th>
           </tr>
           <tr>
<!--formulaire qui affiche les articles du panier -->            
    <form action="./traitementCommande.php" method="post">
         <?php if (isset(($_SESSION['panier'])) ) 
         $i =0;
         foreach ($_SESSION['panier'] as $produit) { 
          ?>
            <td><?php echo $produit['id'] ?></td>
            <td><?php echo $produit['name'] ?></td>
             <td>
             <?php echo $produit['qte'] ?>
             </td>
             <td><?php echo $produit['prix'] ?></td>
             <td><?php echo $produit['prixTotal'] ?></td>
           </tr>
          <?php 
        $i++;
        } ?>
         </table>
         <h3>Prix total: </h3>
         <button id="commander" type="submit">Commander</button>
        </div> 
      </form>     
   </div> 
</body>

</html>

 