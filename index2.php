<?php
/*Affiche heure minute et seconde*/

$heure = 21;
$minutes =57;
$seconde = 59;


$seconde++;




if($heure >= 23 || $minutes >= 59 || $seconde >=60){
    $minutes2 = 00;
    $heure2 = 00;
    $seconde2 = 00;
    if($heure >= 23 && $minutes >= 59 && $seconde >=59){
        echo("Dans une minute, il sera $heure2" . "h/$minutes2" . "min/$seconde2") ."sec";}
    
  
    elseif($minutes>=59 && $seconde <59){
        
        echo("Dans une minute, il sera $heure" . "h/$minutes" . "min/$seconde") ."sec"; 
    }
    elseif ($minutes<59 && $seconde >=59) {
          $minutes++;
        echo("Dans une minute, il sera $heure" . "h/$minutes" . "min/$seconde2") ."sec"; 
    }
        
    elseif ($minutes>=59 && $seconde >=59) {
        $heure++;
        echo("Dans une minute, il sera $heure" . "h/$minutes2" . "min/$seconde2") ."sec"; 
    }
    elseif ($seconde>=59) {
    
      
      echo("Dans une minute, il sera $heure" . "h/$minutes" . "min/$seconde2") ."sec"; 
    }
    else {
        echo("Dans une minute, il sera $heure" . "h/$minutes" . "min/$seconde") ."sec"; 
    }
    
    
}


else {
    echo("Dans une minute, il sera $heure" . "h/$minutes" . "min/$seconde") ."sec";
}



?>