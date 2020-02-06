<?php

function affiche_parametres($parametres1,$parametre2) {
    echo " La valeur du premier argument est : ".func_get_arg(0)."<br/>";
    echo " La valeur du second argument est : ".func_get_arg(1)."<br/>";
}

affiche_parametres("Bonjour", "Robert");

//-------------------------------------------

function affiche_nombre_parametres($parametres1,$parametre2) {
    echo " La valeur d'argument est : ". func_num_args()."<br/>";
}

affiche_nombre_parametres("Bonjour", "Robert");

//-------------------------------------------

function affiche_parametres2($parametres1,$parametre2) {
         $num_args = func_num_args();
         $arg_liste = func_get_args();
         for ($i = 0; $i < $num_args; $i++) {
             echo " L'argument $i est : ".$arg_liste[$i]."<br/>";
         }
    
    }

    affiche_parametres2("Bonjour", "Robert");

//-------------------------------------------

function affiche_nombre_parametres2($parametres1,$parametre2) {
    echo " La valeur d'argument est : ". func_num_args()."<br/>";
}
if (function_exists('affiche_nombre_parametres2')){
    echo "La fonction existe.";
}
else{
    echo" La fonction existe pas ";
}

//Autre Maniere de écrire le If ( Opérateur ternaire )

echo function_exists('affiche_nombre_parametres2')?"Existe":"N'existe pas";

//-------------------------------------------

function increments($i) {
    $i++;
    var_dump(func_get_arg(0));
}
increments(1);