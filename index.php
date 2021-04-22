<?php
/*Affiche heure et minute*/

$heure = 22;
$minutes =50 ;

$minutes++;




if($heure >= 23 || $minutes >= 59){
    $minutes2 = 00;
    $heure2 = 00;
    if($heure >= 23 && $minutes >= 59){
        echo("Dans une minute, il sera $heure2" . "h$minutes2");}
    
    if($heure >=23){
        echo("Dans une minute, il sera $heure2" . "h$minutes"); 
    }
    elseif($minutes>=59){
        $heure++;
        echo("Dans une minute, il sera $heure" . "h$minutes2"); 
    }
    else {
        echo("Dans une minute, il sera $heure" . "h$minutes");
    }
    
    
}


else {
    echo("Dans une minute, il sera $heure" . "h$minutes");
}



?>