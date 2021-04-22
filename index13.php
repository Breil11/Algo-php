<?php
/*Affiche le plus grand nombre ainsi que sa position*/

$nombre1 = 1;
$nombre2 = 2;
$nombre3 = 9;
$nombre4 = 11;
$nombre5 = 20;


$grand = $nombre1;
$position =1;

for($i=1; $i < 5; $i++){
    if($nombre1 > $grand){
        $grand = $nombre1;
        $position = $i;
    }
    elseif( $nombre2 > $grand){
        $grand = $nombre2;
        $position = $i;
    }
    elseif( $nombre3 > $grand){
        $grand = $nombre3;
        $position = $i;
    }
    elseif( $nombre4 > $grand){
        $grand = $nombre4;
        $position = $i;
    }
    elseif( $nombre5 > $grand){
        $grand = $nombre5;
        $position = $i;
    }
    
}

    echo("Le nombre le plus grand est:" . " $grand");
    echo('<br>');
    echo("Il est à la position" . "$position");

?>