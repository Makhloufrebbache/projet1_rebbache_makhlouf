<?php
require_once("../Functions/Article.php");
require_once("../connexion.php");
$article=['name'=>$_POST['nom'],'quantity'=>$_POST['qte'],'price'=>$_POST['price'],'img_url'=>"../images/".$_POST['Photo'],'description'=>$_POST["description"]];
ajouterArticle($article);
header('Location: ./Products.php');
?>