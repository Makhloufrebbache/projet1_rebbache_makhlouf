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
  
  <div id="Detail_Article">
    <div id="img_detail_div">
      <img id="img_detail" src="<?php echo $article[0]['img_url']?>" alt="<?php echo $article[0]['img_url']?>">
    </div>
  </div>
  <div id="Description">
      
      <div>
        <label for="">Prix:</label>
        <label name="prix" style="color: blue" for="">  <?php echo $article[0]['price'] ?></label>
        <div hidden>
        <input hidden  style="width: 420px" name="prix" type="text" placeholder="Saisir la quantité" value="<?php echo $article[0]['price'] ?>">
        <input  style="width: 420px" name="name" type="text" placeholder="Saisir la quantité" value="<?php echo $article[0]['name'] ?>" type="hidden">
        </div>
      </div>
     
   </div>
   <div id="Qte">
       <input style="width: 420px" name="qte" type="text" placeholder="Saisir la quantité">
      </div>
     <a href=""> <button style="width: 460px ;margin-left: 100px;" formaction="./indexArticle.php">Confirmer</button></a>
  </form> 
</body>
</html>
<?php

?>

