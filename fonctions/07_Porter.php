<?php
/*
function affiche_mot($nom){
    echo $nom;
}

affiche_mot("Bonjour"); //affiche Bonjour
echo $nom; //erreur car $nom n'est pas defini





$nom =" Jean ";
function affiche_mot($nom){
    echo $nom;
}

afiche_mot("Bonjour"); // affiche Bonjour 
echo $nom; // affiche Jean 
*/

$prenom = "Jean";
function affiche_mot() {
    echo $prenom; // affiche une erreur 
}

affiche_mot();

?>