<?php
/*Affiche la couleur du tarif et la décision d'assurance*/
 
 $age = 20;
 $datep = 5;
 $accident = 1;
 $maison = 6;
 $couleur = "rouge";



 if($age < 25 && $datep < 2){
     if( $accident  < 1){
         echo(" On vous attribue le tarif rouge");
         $couleur = "rouge";
     }
     else{
        echo(" Refus d'assurance !");
     }
 }
 elseif($age < 25 && $datep > 2){
    if( $accident == 1){
        echo(" On vous attribue le tarif orange");
        $couleur = "orange";
    }
    else{
        echo("  On vous attribue le tarif rouge");
        $couleur = "rouge";
     }
 }
 elseif($age > 25 && $datep < 2){
    if( $accident == 1){
        echo(" On vous attribue le tarif orange");
        $couleur = "orange";
    }
    else{
        echo("  On vous attribue le tarif rouge");
        $couleur = "rouge";
     }

}
elseif($age > 25 && $datep > 2){
    if( $accident == 0){
        echo(" On vous attribue le tarif vert");
    }
    elseif( $accident > 0 && $accident < 1){
        echo("  On vous attribue le tarif orange");
     }
     elseif( $accident > 1 && $accident < 3){
        echo("  On vous attribue le tarif rouge");
     }
     else {
        echo("  Refus d'assurance");
     }


}
if($maison > 5 && $couleur == "vert"){
        echo(" Vous etes desormais bleu" );
    }
    elseif($maison > 5 && $couleur == "orange"){
        echo(" Vous etes desormais vert" );
    }
    elseif($maison >5 && $couleur == "rouge"){
        echo(" Vous etes desormais orange" );
    }
    else{
        echo("Vous n'etes pas fidèle");
    }



?>