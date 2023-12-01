<?php 
session_start();
require_once("../Functions/Article.php");
require_once("../connexion.php");
$articles = articles();
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
  <div id ="div_btn_profile"><a href="../User/inscriptionMaj.php" ><?php echo $_SESSION["login"] ?></a></div>
  <div id ="div_btn_profile"><a href="../index.php" >Déconnexion</a></div>
</div> 
</body>
 
</html>
  
  <!--   Récuprer la liste des articles de la table product  -->
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
                       <div><button id="Ajouter_panier">Ajouter au panier</button></div>
                    </div> 
                </div>
                <br>
                                                   <?php }?>
                <div>
                La panier
               </div>
    </div>
    
</body>

</html>
<?php 
 