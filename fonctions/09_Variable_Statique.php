<?php

function affiche_nombre () {
    $nombre = 0;
    $nombre = $nombre + 1;
    echo $nombre.";";
}
 affiche_nombre (); //Affiche 1
 affiche_nombre (); //Affiche 1
 
 
 function affiche_nombre2 () {
    static $nombre = 0;
    $nombre = $nombre + 1;
    echo $nombre.";";
}
affiche_nombre2 (); //Affiche 1
affiche_nombre2 (); //Affiche 2