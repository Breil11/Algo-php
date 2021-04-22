<?php
/*Affiche la somme des entiers précédents jusqu'à $nombre*/ 

function somme($nombre){
    $somme =0 ;

    for($i=0; $i <= $nombre; $i++){
        $somme = $somme+$i;
    }
    
}

$nombre = 5;
$somme = somme($nombre);
echo("La somme des entiers jusqu'à $nombre est:" . " $somme");

?>