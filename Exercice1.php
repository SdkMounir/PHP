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
        define('NB', 10);
        $tab1 = array ();
        $tab2 = array ();
        $tabSomme= array();

        for ($i=1; $i<=NB; $i++){ // tableau de 1 à 10
            $tab1[$i]=$i;
        }
        
        for ($i=1; $i<=NB; $i++){ // tableau de 11 à 20
            $tab2[$i]=$i+NB;
        }
        
        for ($i=1; $i<=NB; $i++){ // Tableau avec la somme des 2 autres tableau 
            $tabSomme[$i]=$tab1[$i] + $tab2[$i];
        }
        
        for ($i=1; $i<=NB; $i++){ //Affichage du Tableau  avec la Somme
            echo $tabSomme[$i]."<br>";
        }
        
        
        
        
        ?>
    </body>
</html>
