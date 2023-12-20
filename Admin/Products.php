<?php 
session_start();
require_once("../connexion.php");
require_once("../Functions/Article.php");
require_once("../Functions/User.php");
$articles=articles();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>Produits</title>
</head>
<body>
<div style="padding: 30px 200px ;width: 100%;">
<table style="width: 70%;" class="table table-bordered table-striped table-condensed ">
   <caption>
      <div  class="row success">
        <div class="col-lg-3"></div>
        <div  class="col-lg-4" >&nbsp;<span  ><a id="a" href="./admin/usersadd">+Ajouter un produit </a></span></div><br>
    
      </div>
   </caption>
   <thead>
     <tr class="success">
       <th scope="col">ID</th>
       <th scope="col">Nom</th>
       <th scope="col">Quantité</th>
       <th scope="col">Prix</th>
       <th scope="col">Image</th>
       <th scope="col">Description</th>
       <th scope="col">Modif</th>
       <th scope="col">Supp</th>
     </tr>
   </thead>
   <tbody>
    <?php foreach($articles as $article){ ?>
     <tr>
       <td><?php echo $article['id']?></td>
       <td><?php echo $article['name'];?><?php ?></td>
       <td><?php echo $article['quantity'];?></td>
       <td><?php echo $article['price'];?></td>
       <td><?php echo $article['img_url'];?></td>
       <td><?php echo $article['description'];?></td>
        <td class="tableUserTd"><a href="./../?name=<?php echo $article["id"] ?>"><img src="../images/edit.jpg"></a></td>
       <td class="tableUserTd"><a href="./traitementDeleteArticle.php/?name=<?php echo $article["id"] ?>" ><img src="../images/sup.jpg"></a></td>

       
     </tr>
    <?php } ?>
   </tbody>
</table>  
</div>  
</body>
</html>