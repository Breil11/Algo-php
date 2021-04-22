<?php
/*Affiche le status du candidat numéro 1*/
 
 $score1 = 20;
 $score2 = 53;
 $score3 = 75;
 $score4 = 59;

  if ($score1 < 50) {
    echo(" Le candidat 1 est battu dès le premier tour." . " "); }
    

 
 elseif($score1 > 50){
     echo(" Le candidat 1 est élu dès le premier tour." . " ");
 }
    if($score1 > $score2 && $score1 > $score3 && $score1 > $score4 ){
        echo("Il se trouve en ballottage favorable! ") ;}
        
    else {
        echo("Il se trouve en ballottage défavorable ! ");
    }



?>