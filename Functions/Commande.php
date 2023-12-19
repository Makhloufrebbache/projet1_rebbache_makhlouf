<?php 
//Fonction qui récupère la d
function nextReferenceInOrderUser(){
   global $conn;
   $result = mysqli_query($conn,"SELECT ref FROM user_order ORDER BY id DESC LIMIT 1");
   $refs = [];
   $i = 0;
   while ($ref = mysqli_fetch_assoc($result)) {
        $refs[$i] = $ref;
        $i++;
   };

   foreach ($refs as $ref) {
    $reference=$ref['ref'];
    }
   return $reference + 1  ;
  }
// fonction qui insére dans la table order_user, renvoi l'id insérer  
function createUserOrder($user_order){
  global $conn;
  $query = "INSERT INTO user_order VALUES (NULL,?,?,?,?)";
   if ($stmt = mysqli_prepare($conn, $query )) {
        mysqli_stmt_bind_param(
            $stmt,
            "ssdi",
            $user_order['ref'],
            $user_order['date'],
            $user_order['total'],
            $user_order['user_id'],
        );
           $result = mysqli_stmt_execute($stmt);
    }
        $last_id = mysqli_insert_id($conn);
        return $last_id;
}
//Fonction pour inserer dans la table order_has_product. 
function createCommande($order){
global $conn;
$query = "INSERT INTO order_has_product VALUES (?,?,?,?)";
   if ($stmt = mysqli_prepare($conn, $query)) {
        
        mysqli_stmt_bind_param(
            $stmt,
            "iiid",
            $order['order_id'],
            $order['product_id'],
            $order['quantity'],
            $order['price'],
        );
        $result = mysqli_stmt_execute($stmt);
       // echo mysqli_error($conn);
    }
    }
 //fonction qui récupere toutes les commandes 
   function getAllOrder(){
    global $conn;
    $result = mysqli_query($conn,"SELECT * FROM user_order");
    $orders = [];
    $i = 0;
    while ($order = mysqli_fetch_assoc($result)) {
        $orders[$i] = $order;
        $i++;
    };
    return $orders;
   } 
   //fonction qui récupere toutes les commandes 
   function getAllOrderById($userID){
    global $conn;
    $result = mysqli_query($conn,"SELECT * FROM user_order WHERE user_id = $userID");
    $orders = [];
    $i = 0;
    while ($order = mysqli_fetch_assoc($result)) {
        $orders[$i] = $order;
        $i++;
    };
    return $orders;
   } 

?>