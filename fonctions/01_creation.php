<?php
function calcul_ttc($prix_ht){
    return $prix_ht * 1.2;
}

$prix =12;
$prix_ttc = calcul_ttc($prix_ht);
echo "$prix euros HT correspondent à $prix_ttc euros TTC<br/>";


function assemble_mot($mot1,$mot2,$mot3){
    $retour = $mot1." ".$mot2." ".$mot3."<br/>";
    return $retour;
}

echo assemble_mot("Bonjour", "Jean", "Dupont");

function affiche_bonjour() {
    echo " Bonjour<br/>";
}


affiche_bonjour();

echo assemble_mot2("Bonjour","Jean");