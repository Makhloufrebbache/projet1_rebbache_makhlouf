<?php

//Fonction qui recupères tous les articles de table product
function articles(){
    global $conn;
    $result = mysqli_query($conn,"SELECT * FROM product");
    $articles = [];
    $i = 0;
    while ($article = mysqli_fetch_assoc($result)) {
        $articles[$i] = $article;
        $i++;
    };
return $articles;
 } 
?>