<?php

function echange(&$a, &$b): void {
    if ($a===$b){
        return;
    }
      $c=$a;
      $a=$b;
      $b=$c;
}


$x= 1;
$y=2;
var_dump(echange($x, $y), $x, $y); //appel de la fonction echange
?>

