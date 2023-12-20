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
 //Fonction qui recupères un article à partir de son ID
function article($id){
    global $conn;
    $result = mysqli_query($conn,"SELECT * FROM product WHERE id = $id");
    $articles = [];
    $i = 0;
    while ($article = mysqli_fetch_assoc($result)) {
        $articles[$i] = $article;
        $i++;
    };
 return $articles;
 } 
 //Fonction qui ajoute un produit dans la base de donnée.
 function ajouterArticle($article){
 global $conn;
 $query = "INSERT INTO product VALUES (NULL,?,?,?,?,?)";
   if ($stmt = mysqli_prepare($conn, $query)) {
        
        mysqli_stmt_bind_param(
            $stmt,
            "sidss",
            $article['name'],
            $article['quantity'],
            $article['price'],
            $article['img_url'],
            $article['description'],
            
        );
        $result = mysqli_stmt_execute($stmt);
         echo mysqli_error($conn);
    }
}
?>