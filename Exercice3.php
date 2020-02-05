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
       
                
        
        $tab_caracteristique_dupont = array ("prénom" => "PAUL",
                                             "Profession"=>"Ministre",
                                             "age"=>50 );
        
        $tab_caracteristique_durant = array ("prénom" => "ROBERT",
                                             "Profession"=>"Agriculteur",
                                             "age"=>45 );
        
        $tab_personne ['DUPONT'] = $tab_caracteristique_dupont;
        $tab_personne ['DURANT'] = $tab_caracteristique_durant;
        
        //var_dump($tab_personne);
        
        echo '<table border>';
        echo '<thead><tr><th>';
        echo 'Clé';
        echo '</th><th colspan="2">';
        echo 'Valeur';
        echo '</th></tr></thead>';
        foreach ($tab_personne as $cle => $val){
            //$cle correspondant à Dupont ou Durand 
            $nombre_ligne = count($val)+1; //nombre de lignes à afficher 
            
            echo'<tr><td rowspan="'.$nombre_ligne.'">';
            echo $cle;
            echo '</td>';
            echo '<td>Clé</td><td>Valeur</td></tr>';
            
            
            foreach ($val as $cle2 => $val2){
                echo '<tr>';
                echo '<td>'.$cle2.'</td>;';
                echo '<td>'.$val2.'</td>';
                echo '</tr>';
                
                
            }
        }
        
        echo'</table>'
        ?>
    </body>
</html>
