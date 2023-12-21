<?php 
session_start();
require_once("../connexion.php");
require_once("../Functions/Commande.php");
require_once("../Functions/User.php");
//récupérer le role de l'utilisateur
$users=getUser($_SESSION["login"]);
foreach ($users as $user) {
    $userRole= $user["role_id"];
}
$allOrders=getAllOrder();
//récupérer l'id de user
$users=getUser($_SESSION["login"]);
foreach ($users as $user) {
$userid= $user["id"];
}
$orderUser=getAllOrderById($userid);
?>
<!--Récupérer les commandes selon id de user, sauf si c'est un admin il peut voir toutes les commandes -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>Commandes</title>
</head>
<body>
<div id="tableUser">
  <h2>Gestion des commandes</h2>
  <br>  
  <table >
     <tr id="tableUserTr" >
       <th class="tableUserTh">ID</th>
       <th class="tableUserTh">Référence</th>
       <th class="tableUserTh">Date</th>
       <th class="tableUserTh">Edit</th>
       <th class="tableUserTh">Supp</th>
     </tr>
  <?php if ($userRole != 3) { 
    foreach ($allOrders as $order) { ?>
     <tr>
       <td class="tableUserTd"><?php echo $order["id"]?></td>
       <td class="tableUserTd"><?php echo $order["ref"] ?></td>
       <td class="tableUserTd"><?php echo $order["date"] ?></td>
       <td class="tableUserTd"><a href=""><img src="../images/edit.jpg"></a></td>
       <td class="tableUserTd"><a href="" ><img src="../images/sup.jpg"></a></td>
     </tr> 
    <?php }
    } else {
          foreach ($orderUser as $order) { ?>
        <tr>
          <td class="tableUserTd"><?php echo $order["id"]?></td>
          <td class="tableUserTd"><?php echo $order["ref"] ?></td>
          <td class="tableUserTd"><?php echo $order["date"] ?></td>
          <td class="tableUserTd"><a href=""><img src="../images/edit.jpg"></a></td>
          <td class="tableUserTd"><a href="" ><img src="../images/sup.jpg"></a></td>
        </tr> 
       <?php }
    }  ?>
    
</table>
</div>
</body>
</html>