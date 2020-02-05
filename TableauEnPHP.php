<?php

 // 1 Tableaux Numériques 
$tableau = array ('Jean', 'Robert', 'Paul', 'Joe', 'Alain');
//echo $tableau[0];

// remplacer robert par nadia 
$tableau[1] = 'Nadia';

//Creation tableau vide et affectation de valeur
$tableau = array();
 $tableau[0]= 'Jean';
 $tableau[1]= 'Robert';
 $tableau[2]= 'Paul';
 $tableau[3]= 'Joe';
 $tableau[4]= 'Alain';

 // Autre Syntaxe          
$tableau = array();
$tableau[]= 'Jean';
$tableau[]= 'Robert';
$tableau[]= 'Paul';
$tableau[]= 'Joe';
$tableau[]= 'Alain';


//Autre Syntaxe
$tableau = ['Jean ', 'Robert', 'Paul', 'Joe', 'Alain'];


// 2 TABLEAU ASSOCIATIFS
$tableau = array('A1'=>'Jean', 'B4'=>'Robert', 3=>'Paul', 'Toto'=>'Joe', 'H'=>'Alain');

//Autre Syntaxe 
$tableau = array();
$tableau['A1']= 'Jean';
$tableau['B4']= 'Robert';
$tableau[3]= 'Paul';
$tableau['Toto']= 'Joe';
$tableau['H']= 'Alain';

// Pertinace des clés
$personne = array();
$personne['Nom']= 'Jean';
$personne['Prenom']= 'Robert';
$personne['Age']= 54;

echo 'Age : '.$personne['Age'].'<br>';

//3 CONSTANTE DE TYPE TABLEAU
const COULEURS = array('Rouge', ' Vert', 'Noir');
echo COULEURS[1];

//Autre Syntaxe 
 define('COLORS', array(
          'rouge',
          'vert',
           'noir'
 ));
echo COLORS[1];

//4 PARCOURS D'UN TABLEAU

//Boucle for 

//CREATION DU TABLEAU


$tableau = array('Jean', 'Robert', 'Paul', 'Joe', 'Alain');
// Boucle sur le tableau
for ($i = 0; $i <5 ; $i++) {
    echo $tableau[$i].'<br>';
}


//AVEC LA FONTION COUNT() OU SIZEOF()
//Creation du tableau 
$tableau = array('Jean', 'Robert', 'Paul', 'Joe', 'Alain');
// Boucle sur le tableau 
for ( $i = 0; $i < sizeof($tableau); $i++) {
    //affichage des valeurs du tableu concaténées
    //avec un saut de ligne 
    echo $tableau[$i].'<br>';
}

//LA BOUCLE foreach
//Creation du tableau 
$tableau = array('Jean', 'Robert', 'Paul', 'Joe', 'Alain');
// Boucle sur le tableau 
foreach ( $tableau as $val) {
    //affichage des valeurs du tableu concaténées
    //avec un saut de ligne 
    echo $val.'<br>';
}


//Affichge des clés
//Creation du tableau 
$tableau = array('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
// Boucle sur le tableau 
foreach ( $tableau as $key => $val) {
    //affichage des valeurs du tableu concaténées
    //avec un saut de ligne 
    echo'Nom : '.$val.'<br>';
    echo'Clés : '.$key.'<br>';
}

//foreach sans la clé 
$tableau = array('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
// Boucle sur le tableau 
foreach ( $tableau as  $val) {
    //affichage des valeurs du tableu concaténées
    //avec un saut de ligne 
    echo'Nom : '.$val.'<br>';
}

//Depuis PHP 7 foreach travaille sur une copie du tableau
//Le pointur du tableau n'est plus modifié pendant son parcours
//Reste modifiable s'il est passé par référence 
$tab = [0];
foreach ($tab as &$val){
    var_dump($val);
    $tab[1]=[1];
    
}

// LA FONCTION print_r
//creation du tableau 
$tableau = array ('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
print_r ($tableau);


// 5 FONCTIONS SUR LES TABLEAUX

 // A LONGUEUR D'UN TABLEAU
 // création du tableau
$tableau = array ('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
        $taille = count ($tableau);
        echo 'La Taille du tableau est : '.$taille ;
        
   // B EXISTENCE D'UNE VALEUR
 // création du tableau
$tableau = array ('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
if (in_array('Robert', $tab)){
echo '  Robert est dans le tableau<br>';
};


// 3eme param : false par defaut ( ne tien pas comte du type)
// creation du tableau
 // A LONGUEUR D'UN TABLEAU
 // création du tableau
$tableau = array ('10','33','55','78');
if (in_array(33, $tableau, true)){  // ajout de "true" pour tenur compte du type 
    echo '33 Est dans le tableau<br>';
    
}
 else {
    echo '  33 y est pas<br> ';
 };
 
 // C EXISTENCE D'UNE CLE 
 // creation du tableau
 $tableau = array ('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
  if (array_key_exists(3, $tableau)) {
      echo 'La clé est dans le tableau <br>';
  }
 else {
      echo 'La clé n y est pas';
}

//creation du tableau
$tableau = array ('Jean','Robert', 'Paul', 'Joe','Alain');
if (array_key_exists(6, $tableau)){
    echo ' La clé 4 est dans le tableau, sa valeur est : '.$tableau[4].'<br/>';
}

// D TRI D'UN TABLEAU

//sort() : tie les valeurs de la plus petite à la plus grande valeur
// creation du tableau
$tableau = array ('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
sort($tableau);
foreach ($tableau as $cle=>$valeur){
    echo 'Clé :'.$cle.', valeur : '.$valeur.'<br />';
}
//sort() : tie les valeurs de la plus petite à la plus grande valeur avec preservation
// creation du tableau
$tableau = array ('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
asort($tableau);
foreach ($tableau as $cle=>$valeur){
    echo 'Clé :'.$cle.', valeur : '.$valeur.'<br /><td />';
}

//rsort() : tie les valeurs de la plus grande à la plus petite valeur
// creation du tableau
$tableau = array ('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
rsort($tableau);
foreach ($tableau as $cle=>$valeur){
    echo 'Clé :'.$cle.', valeur : '.$valeur.'<br /><td />';
}

//arsort() : tie les valeurs de la plus grande à la plus petite valeur avec préservation de clé
// creation du tableau
$tableau = array ('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
arsort($tableau);
foreach ($tableau as $cle=>$valeur){
    echo 'Clé :'.$cle.', valeur : '.$valeur.'<br />';
         
}

//sort() : tie les valeurs de la plus grande à la plus petite
// valeur
// creation du tableau
$tableau = array ('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
ksort($tableau);
foreach ($tableau as $cle=>$valeur){
    echo 'Clé :'.$cle.', valeur : '.$valeur.'<br /> \n';
}

//sort() : tie les valeurs de la plus grande à la plus petite valeur
// creation du tableau
$tableau = array ('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
krsort($tableau);
foreach ($tableau as $cle=>$valeur){
    echo 'Clé :'.$cle.', valeur : '.$valeur.'<br />';
}

//array_search() est une fonction équivlente à in_array(). Elle permet de rechercher 
//tableau mais elle renvoi cle de l'element rechercher 
// creation du tableau
$tableau = array ('A1'=> 'Jean','B4'=> 'Robert', 3=>'Paul', 'ToTo'=>'Joe','H'=> 'Alain');
$cle_element = array_search('Robert', $tableau);

    echo "La clé de l'element recherché est : ".$cle_element.'<br />';
    
    
//AUTRE EXEMPLE
// creation du tableau
$tableau = array ('Jean','Robert', 'Paul', 'Joe','Alain');
$cle_element = array_search('Robert', $tableau);
echo "La clé de l'element recherché est : ".$cle_element.'<br />';

// F DECOUPER UNE CHAINE DANS UN TABELAU 

//explode() permet de découper une chaine dans un tableau en utilisant un separateur 
$ensemble = "1;2;3;4;5";
$tableau= explode(";", $ensemble);
echo "La premiere valeur du tableau est : ".$tableau[0].'<br/>';
echo "La dernière valeur du tableau est : ".$tableau[count($tableau )-1].'<br/>';

$ensemble = "1-2-3-4-5";
$tableau= explode("-", $ensemble);
echo "Les valeurs du tableau sont : " ;
foreach ($tableau as $valeur){
    echo $valeur.";" ;
}

// G Regrouper les valeurs d'un tableau dans une chaine 
// creation du tableau
$tableau = array ('Jean','Robert', 'Paul',);
$nom = implode (";", $tableau);
echo "les noms sont : ".$nom.'<br/>';


//H Découper une chaine en morceaux de longeure fixe 

//str_split() permet de découper une chaine en morceaux de longueur fixe dans 
// parametre indiquant la taille des morceaux de chaine.

$ensemble = "1;2;3;4;5";
$tableau = str_split($ensemble,2);
echo 'Les élément sont :';
foreach ($tableau as $valeur){
    echo $valeur." ";
}

// I Ajouter des éléments à a fin du tableau
// array_push() permet d'ajouter un ou plusieurs élément à la fin du tableau.
$tableau = array("Jean","Robert","Paul");
array_push($tableau, "Joe", "Alain");
echo $tableau[4].'<br/>';

// J suppression d'un élément a la fin du tableau

$tableau = array("Jean","Robert","Paul");
$nom= array_pop($tableau);
echo " Le nom supprimé est : ".$nom.'<br/>';
        
$tableau = array("Jean","Robert","Paul");
echo "Avant la suppression, le nombre d'éléments dans le tableau est : ".count($tableau).'<br/>';
$nombre_element = count($tableau);
for ( $i=0; $i<$nombre_element;$i++){
$nom= array_pop($tableau);
}
echo " le dernier nom supprimé est : ".$nom."<br /";
echo " Apres suppression , nb élement : ".count($tableau);

// K Sélection aléatoire d'un élément du tableau 

// array_rand() permet de selectionner de manière aléatoire un ou plusieurs 
//élément d'un tableau et de retourner les clés correspondantes.
$tableau = array("Jean","Robert","Paul");
$cle_aleatoire = array_rand($tableau);
echo" Nom sélectionnéau hasard :".$tableau[$cle_aleatoire];

//Le parametre $nombre_sélectionne est optionnel,
//par defaut il vaut 1. Il correspond au nombre de
//valeus à prendre au hasard. Voici un exemple l'utilisant :
$tableau = array("Jean","Robert","Paul");
$tableau_cle_aleatoire = array_rand($tableau,2);
echo " Premier nom : ".$tableau[$tableau_cle_aleatoire[0]]."<br/>";
echo " Second nom  : ".$tableau[$tableau_cle_aleatoire[1]];



?>
