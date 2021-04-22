<?php
/*Calcule la factorielle*/

function factorielle($nombre){
    $factorielle =1;

    for($i=1; $i <= $nombre; $i++){
        $factorielle = $factorielle*$i;
    }
    return $factorielle;
}

$nombre = 3;
$factorielle = factorielle($nombre);
echo("La factorielle de $nombre est:" . " $factorielle");

?>