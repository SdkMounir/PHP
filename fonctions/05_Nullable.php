<?php


//déclaration d'une fonction retournant un type string ou null
//et prenant en parametre un type string ou null

function test (?string $name ): ?string {
    return $name ;
}

var_dump(test (null)); //appel de la fonction avec NULL 
echo "<br/>";
var_dump(test("Bonjour")) ; //appel de la fonction avec une chaine de carateres
