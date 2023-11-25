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
    global $conn;
    $isExist=["exist"=>false,"msg"=>""];
    $result = mysqli_query($conn,"SELECT COUNT(user_name) FROM user WHERE user_name = '$username'" );
    $nbr_ligne = mysqli_fetch_row($result);
    if($nbr_ligne[0]!=0){
    $isExist=["exist"=>true,"msg"=>"le nom d'utilisateur existe déja !"]; 
    }
    else{
     $isExist=["exist"=>false,"msg"=>"Inscription avec succés !"];   
    }

    return $isExist;
 } 
  /* fonction pour concroler le formulaire d'inscription */
    function verifierDataFormsInscription($dataForms,$p1,$p2,$p3,$p4,$p5){
      $dataForms=['user_name'=>$p1,'email'=>$p2,'pwd'=>$p3,'fname'=>$p4,'lname'=>$p5];
      $Msg=[];
    if ($dataForms['user_name']==""||($dataForms["email"]=="")||($dataForms["pwd"]=="")||($dataForms["fname"]=="")||($dataForms["lname"]=="")) {
        $Msg =['isEmpty' => true,'msg'=>'Erreur: un ou plusieurs champs sont vide, veuillez remplir tous les champs.'];  
        }
    else{
        $Msg =['isEmpty' => false,'msg'=>'Succés: tous les champs sont remplis.']; 
        }
    return $Msg;
 }
    
      
?>

