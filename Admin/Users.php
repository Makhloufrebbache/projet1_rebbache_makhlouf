<?php 
session_start();
require_once("../connexion.php");
require_once("../Functions/User.php");
$allusers=getAllUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>User</title>
</head>
<body>
<div id="tableUser">
  <h2>Gestion des utilisateurs</h2>
  <br>  
  <table >
     <tr id="tableUserTr" >
       <th class="tableUserTh">Nom & Prénom</th>
       <th class="tableUserTh">Login</th>
       <th class="tableUserTh">Type utilisateur</th>
       <th class="tableUserTh">Edit</th>
       <th class="tableUserTh">Supp</th>
     </tr>
    <?php foreach ($allusers as $user) { ?>
     <tr>
       <td class="tableUserTd"><?php echo $user["fname"]."  ".$user["lname"] ?></td>
       <td class="tableUserTd"><?php echo $user["user_name"] ?></td>
       <td class="tableUserTd"><?php  if($user["role_id"]==1) {echo "SuperAdmin";} elseif($user["role_id"]==2){echo "Admin";} else{echo "Client";}?></td>
       <td class="tableUserTd"><a href="./traitementModifyUser.php/?name=<?php echo $user["user_name"] ?>"><img src="../images/edit.jpg"></a></td>
       <td class="tableUserTd"><a href="./traitementUsers.php/?name=<?php echo $user["user_name"] ?>" ><img src="../images/sup.jpg"></a></td>
     </tr> 
    <?php } ?>
</table>
</div>
</body>
</html>