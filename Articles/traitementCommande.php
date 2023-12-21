<?php
require_once("../connexion.php");
require_once("../Functions/User.php");
require_once("../Functions/Commande.php");
require_once("../Functions/Article.php");
session_start();
$total=0;

//calculer le prix toltal de la commande
foreach ($_SESSION['panier'] as $panier) {
   $tabOrder=['quantity'=>$panier["qte"],'price'=>$panier["prix"]];
    $total= $total + ($tabOrder['price'] * $tabOrder['quantity']);
    
}
 //Récuperer l'id de l'utilisateur en question.
 $users= getUser($_SESSION["login"]);
 foreach ($users as $user) {
  if($user['user_name']==$_SESSION["login"]){
    $id=$user['id'];
  }
 }
   // récupere la date du jours et inserer dans la table user_order.
   $date = date("Y-m-d");
   $user_order =['ref'=>nextReferenceInOrderUser(),'date'=>$date,'total'=>$total,'user_id'=>intval($id)]; 
   $lastID= createUserOrder($user_order);
   // Insérer dans la table order_has_product.
   foreach ($_SESSION['panier'] as $panier) {
   $order=['order_id'=>$lastID,'product_id'=>$panier["id"],'quantity'=>$panier["qte"],'price'=>$panier["prix"]];
   createCommande($order);
   //Récuper la quantité de l'article dans la BD.
   $articles=article($panier["id"]);
   foreach ($articles as $article) {
  if($article['id']==$panier["id"]){
    $qteTotal=$article['quantity'];
    }
   }
//Calculer la quantité restante
   $qte = $qteTotal-$panier["qte"];
   $product=['id'=>$panier["id"],'quantity'=>$qte];
//Mettre à jour le stock
   updateArticle($product,$panier["id"],$qte);
}
   header('Location: ./indexArticle.php');
?>