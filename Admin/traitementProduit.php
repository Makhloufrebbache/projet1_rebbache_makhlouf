<?php
//traitement d'ajout des produits
require_once("../Functions/Article.php");
require_once("../connexion.php");
//récupére le tableau post dans la variable artcile.
$article=['name'=>$_POST['nom'],'quantity'=>$_POST['qte'],'price'=>$_POST['price'],'img_url'=>"../images/".$_POST['Photo'],'description'=>$_POST["description"]];
// Ajout de produits dans la tables product.
ajouterArticle($article);
header('Location: ./Products.php');
?>