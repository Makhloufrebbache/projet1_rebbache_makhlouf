<?php 
require_once("../Functions/Article.php");
require_once("../Functions/User.php");
require_once("../connexion.php");
session_start();
$id =$_SESSION["GET_ID"];
$_SESSION['id']=$id;
$article=article($id)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>quantité article</title>
</head>
 <body>
   <form action="" method="post">
    <div id="img_detail_div">
    <label for="">Image</label>
    <img id="img_detail" src="<?php echo $article[0]['img_url']?>" alt="<?php echo $article[0]['img_url']?>">
     <input id="test_input" name="name" type="text" value="<?php echo $article[0]['name'] ?>">
    </div>
    <div>
    <label for="">Marque</label>
    <input id="test_input" name="name" type="text" value="<?php echo $article[0]['name'] ?>">
    </div>
    <div>
    <label for="">Prix</label>
    <input name="prix" type="text" value="<?php echo $article[0]['price'] ?>">
    </div>
    <div>
    <label for="">Saisir la quantité</label>
    <input name="qte" type="text">
    </div>
    <a href=""> <button formaction="./indexArticle.php">Confirmer</button></a>
   </form> 
</body>
</html>
<?php

?>

