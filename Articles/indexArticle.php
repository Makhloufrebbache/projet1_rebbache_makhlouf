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
  <div id ="div_btn_profile"><a href="" ><?php echo $_SESSION["login"] ?></a></div>
  <div id ="div_btn_profile"><a href="" >Déconnexion</a></div>
</div> 
</body>
 
</html>
  <h2>Liste des articles</h2>  
   <!-- Récuprer la liste des articles de la table product  -->
          <table >
            <tr>
               <th>Nom articles</th>
               <th>Prix</th>
               <th>Déscription</th>
               <th>Image</th>
            </tr>
             <?php foreach ($articles as $article ) { ?>
            <tr>
               <td ><?php echo $article["name"]  ?></td>
               <td ><?php echo $article["price"]   ?></td>
               <td><?php  echo $article["description"] ?></td>
            </tr>
             <?php  }?>
          </table>

</body>
</html>
<?php 
