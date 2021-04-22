<?php
/*Affiche age, sexe et status*/

$age = 25;
$sexe = "Femme";

if($sexe = "Homme" && $age > 20){
 
   
        echo(" Vous devez payer les impots");
    }
    elseif($sexe = "Femme" && $age >= 18 && $age < 35) {
        echo(" Vous  devez payer les impots");
    }
    else {
        echo(" Vous  ne devez pas payer les impots");
    }



?>