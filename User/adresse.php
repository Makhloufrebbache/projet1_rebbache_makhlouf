<?php
 session_start();
//  Récupérer le nombre de formulaires à crées ou déja crées dans le cas d'une modification dans la variable $nbr_forms.

?>
<?php

$error="";
 $errorColor="";
if (isset ($_SESSION["Msg_error_saisie"])){
    $error=$_SESSION["Msg_error_saisie"];
    session_destroy();
}
$errorColor= 'style = "color: red"';
$borderColor='style = "border-color: red; border-width: 2px"';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Style/style1.css">
  <title>Formulaire saisie</title>
</head>
<body>
  <!--formulaire de saisie et de modification au méme temps pour les adresses -->
 <h2 style = "text-align: center">Formulaire d'ajout d'adresses</h2> 
<div id="form1">
<form action="./traitementAdress.php" method="post">
  
   <p id="title_form1"></p>
    <div id="div1_form1"> <label  for=""><span>Street </span>  : </label>
                          <input class="input_form1" text="" name= "street_name" value="" placeholder="Saisir le nom de la rue">
    </div>
    <div id="div1_form2"> <label  for=""><span >Street numbrer </span>  :  </label>
                          <input class="input_form1" text="" name="street_nb" value=""  placeholder="Saisir le numéro de la rue">
    </div>
    <div style = "margin-left: 50px" id="div1_form3"> <label  for=""><span>City </span>  : </label>
                          <input   class="input_form1" text="" name= "city" value="" placeholder="Saisir le nom de la rue">
    </div>
    <div style = "margin-left: -30px" id="div1_form4"> <label for=""> <span class="label_form1">Province</span>  :  </label> 
                                <select name="province" class="input_select_form1">
                                        <option value=>Séléctionner la province</option>
                                        <option value="Montréal">Montréal</option>
                                        <option value="Quebec">Quebec</option>
                                        <option value="Ottawa">Ottawa</option>
                                        <option value="New Brunswik">New Brunswik</option>
                                        <option value="Manitoba">Manitoba</option>
                                </select>
    </div>
    <div id="div1_form5"> <label for=""><span >Zipe code </span>  : </label>
                          <input class="input_form1" text="" name="zip_code" value="" placeholder="Saisir le code postal">
    </div>
     <div style ="margin-left: -30px" id="div1_form4"> <label for=""> <span class="label_form1">Country</span>  :  </label> 
                                <select name="country"class="input_select_form1" >
                                        <option value="">Séléctionner country</option>
                                        <option value="Montréal">Algerie</option>
                                        <option value="Quebec">Canada</option>
                                        <option value="Ottawa">Colombie</option>
                                        <option value="New Brunswik">USA</option>
                                </select>
    </div>
 
    <button type="submit" id="btn_submit">Valider</button><br>
</form>

</div>
</body>
</html>


