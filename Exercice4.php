<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $TABLEAU1 = array (6,25,35,61);
        $TABLEAU2 = array (12,24,46);
        $somme=0;
        $nb_tableau1= count($TABLEAU1);
        $nb_tableau2= count($TABLEAU2);
        for ($i=0; $i<$nb_tableau1; $i++){
                    for ($j=0; $j<$nb_tableau2; $j++){
                        $somme =$somme + $TABLEAU1[$i]* $TABLEAU2[$j];
                    }

        }
        echo 'La valeur de S est : '.$somme;

        
        
        
        ?>
    </body>
</html>
