<?php

declare (strict_types=1);
//Déclaration d'une fonction retournant un type entier 
function affiche(): int {
    return "1" ; //la fonction retourne en fait une chaine de caractères
    
}

try {
    affiche(); //appel de la fonction
} catch (Exception $e) {
         echo($e ->getMessage());
}
?>

