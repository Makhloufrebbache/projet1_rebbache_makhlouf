<?php
//Fonction de création dun utilisateur dans la base de données
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
//Fonction de vérification de l'éxistance d'un nom d'utilisateur dans la base de données
function existUser($username){
    global $conn;
    $isExist=["exist"=>false,"msg"=>""];
    $result = mysqli_query($conn,"SELECT DISTINCT user_name FROM user WHERE user_name = '$username'" );
    $nameFind = mysqli_fetch_assoc($result);
    if($nameFind["user_name"]==$username){
    $isExist=["exist"=>true,"msg"=>"le nom d'utilisateur existe déja !"]; 
    }
    else{
     $isExist=["exist"=>false,"msg"=>"Inscription avec succés !"];   
    }
    return $isExist;
 } 
 //Fonction de vérification de l'authentification d'utilisateur dans la base de données
function authenticatedUser($username,$password){
    global $conn;
    $isExist=["exist"=>false,"msg"=>""];
    $result = mysqli_query($conn,"SELECT DISTINCT user_name,pwd FROM user WHERE user_name = '$username' and pwd='$password'" );
    $nameFind = mysqli_fetch_assoc($result);
    if($nameFind["user_name"]==$username and $nameFind["pwd"]==$password ){
    $isExist=["auth"=>true,"msg"=>"Utilisateur connecté "]; 

    }
    else{
     $isExist=["auth"=>false,"msg"=>"Veuillez saisir correctement vous informations !"];   
    }

    return $isExist;
 } 
  // fonction de controle de formulaire d'inscription 
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
  // fonction de controle de formulaire de login 
    function verifierDataFormsLogin($dataForms,$p1,$p2){
      $dataForms=['login'=>$p1,'password'=>$p2];
      $Msg=[];
    if ($dataForms['login']==""||($dataForms["password"]=="")) {
        $Msg =['isEmpty' => true,'msg'=>'Erreur: veuillez remplir tous les champs.'];  
        }
    else{
        $Msg =['isEmpty' => false,'msg'=>'Succés: tous les champs sont remplis.']; 
        }
    return $Msg;
 }
 //fonction qui récupere les les informations d'un utilisateur à partir de son username   
   function getUser($username){
    global $conn;
    $result = mysqli_query($conn,"SELECT * FROM user WHERE user_name = '$username'");
    $users = [];
    $i = 0;
    while ($user = mysqli_fetch_assoc($result)) {
        $users[$i] = $user;
        $i++;
    };
    return $users;

   }
   //Fonction pour mettre à jour les champs adresse dans la table user
   function updateUserAdress($user,$id){
   global $conn;
   $query = "UPDATE user SET billing_address_id =?, shipping_address_id = ?  WHERE user_name = ?;";
    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "iis",
            $user['billing_address_id'],
            $user['shipping_address_id'],
            $user['user_name'],
        );

        $result = mysqli_stmt_execute($stmt);

   }
   }
   //fonction qui récupere les les informations de tout les utilisateurs 
   function getAllUser(){
    global $conn;
    $result = mysqli_query($conn,"SELECT * FROM user");
    $users = [];
    $i = 0;
    while ($user = mysqli_fetch_assoc($result)) {
        $users[$i] = $user;
        $i++;
    };
    return $users;
   } 
  //fonction qui supprime l'utilisateur
  function deleteUser($user_name)
   {
     global $conn;
     $query = "DELETE FROM user
                WHERE user.user_name = ?;";

     if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "s",
            $user_name,
        );
        $result = mysqli_stmt_execute($stmt);
    }
  }
  //fonction pour récupérer les roles
  function getRoles(){
    global $conn;
    $result = mysqli_query($conn,"SELECT * FROM role");
    $roles = [];
    $i = 0;
    while ($role = mysqli_fetch_assoc($result)) {
        $roles[$i] = $role;
        $i++;
    };
    return $roles;
   } 
   //fonction qui exécute ma modification d'un compte utilisateur par un administrateur
   function updateUserByAdmin($user){
   
   global $conn;
   $query = "UPDATE user SET  role_id = ?  WHERE user_name = ?;";
    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "ss",
            $user['role'],
           $user['nomUtilisateur'],
        );

        $result = mysqli_stmt_execute($stmt);

   }
   }
//Mise à jours des adresses
   function updateUser($user) {
   global $conn;
   $query = "UPDATE user SET billing_address_id = ? , shipping_address_id = ?  WHERE user_name = ?;";
    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "iis",
            $user['billing_address_id'],
            $user['shipping_address_id'],
            $user['user_name'],
        );

        $result = mysqli_stmt_execute($stmt);

   }
}
//Insérer le token
   function updateUserSetToken($user){
   global $conn;
   $query = "UPDATE user SET token = ?  WHERE user_name = ?;";
    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "ss",
            $user['token'],
            $user['user_name'],
        );

        $result = mysqli_stmt_execute($stmt);

   }
   }
//Fonction pour céation d'adresse et récpérer l'id
function createAdress( $data) {
    global $conn;
    $query = "INSERT INTO address VALUES (NULL,?,?,?,?,?,?)";
    if ($stmt = mysqli_prepare($conn, $query)) {
       
        mysqli_stmt_bind_param(
            $stmt,
            "sissss",
            $data['street_name'],
            $data['street_nb'],
            $data['city'],
            $data['province'],
            $data['zip_code'],
            $data['country'],
        );

        $result = mysqli_stmt_execute($stmt);
    }
     $last_id = mysqli_insert_id($conn);
     return $last_id;
}
 ?>

