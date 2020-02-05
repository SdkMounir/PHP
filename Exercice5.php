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
        $tabBannieres = array (
            1 => array ('https://www.memphiscofee.com/',
                 'img/banniere1.jpg',
                 'Ambiance Happy Days'),
            2 => array ('https://www.groupon.fr/',
                 'img/banniere2.jpg',
                 'Goûtez la difference'),
            3 => array ('https://www.restaurants.mcdonalds.fr/mcdonalds-marseille-rue-de-rome',
                 'img/banniere3.jpg',
                 'Venez comme vous êtes'),
        );
       $cle_aleatoire = array_rand($tabBannieres);
       echo '< a href= "', $tabBannieres[$cle_aleatoire][0],'">';
       echo '<img src="', $tabBannieres[$cle_aleatoire][1],
               '" alt="',  $tabBannieres[$cle_aleatoire][2], '" />';
       echo '</a>';
        ?>
    </body>
</html>
