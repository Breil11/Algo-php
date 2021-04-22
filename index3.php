<?php
/*Affiche facture*/

$nombre = 35;
$facture1 = 0.1 * $nombre;
$facture2 = (0.09 * ($nombre -10) + 1);
$facture3 = ((0.08 * ($nombre - 30)) + (0.09 * ($nombre-15)) + 1 );


if($nombre <= 10){
    echo("Votre facture s'élève à: $facture1" . "E");
}

elseif($nombre > 10 && $nombre <= 30){
    echo("Votre facture s'élève à: $facture2" . "E");
}

elseif($nombre > 30){
    echo("Votre facture s'élève à: $facture3" . "E");
}
?>