<?php
/*Fonction de création dun utilisateur dans la base de données*/
function createUser($user)
 {
    global $conn;
    $query = "INSERT INTO user VALUES (NULL,?,?,?,?,?,'','','',3)";
    if ($stmt = mysqli_prepare($conn, $query)) {
       
        mysqli_stmt_bind_param(
            $stmt,
            "sssss",
            $user['user_name'],
            $user['email'],
            $user['pwd'],
            $user['fname'],
            $user['lname'],
        );
        $result = mysqli_stmt_execute($stmt);
    }
}
/*Fonction de vérification de l'éxistance d'un utilisateur dans la base de données*/
function existUser($username){
    $isExist=["exist"=>false,"msg"=>""];
    //$existe=false;
    global $conn;
    $result = mysqli_query($conn,"SELECT COUNT(user_name) FROM user WHERE user_name = '$username'" );
    $nbr_ligne = mysqli_fetch_row($result);
    if($nbr_ligne[0]!=0){
    $isExist=["exist"=>true,"msg"=>"le username existe déja !"]; 
    }
    else{
     $isExist=["exist"=>false,"msg"=>"Inscription avec succés !"];   
    }
    
    return $isExist;
 } 
?>

