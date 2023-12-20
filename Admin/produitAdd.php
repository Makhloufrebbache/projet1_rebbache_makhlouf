
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Style/style.css">
<h2>Ajout produit</h2>

<form action="./traitementProduit.php" method="post">

  <div class="container">
   <div id="nom">
    <label>Nom produit</label>
    <input type="text" placeholder="Entrer nom produit" name="nom">
   </div>
   <div id="qte">
    <label>Quantité</label>
    <input type="text" placeholder="Entrer quantité" name="qte" >
   </div>
   <div id="price">
    <label>prix</label>
    <input type="text" placeholder="Entrer prix" name="price" >
   </div>
   <div id="image">
    <label>Image</label>
    <input style="background-color: white;" type="file" name="Photo" id="Photo" />
   </div>
   <div id="description">
    <label>Description</label>
    <input type="text"placeholder="Decrire le produit" name="description">
   </div>
  
    <button type="submit">Ajouter</button>
    </div>
  </div>
  </div>
</form>

</body>
</html>

