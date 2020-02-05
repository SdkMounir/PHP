<?php

function multiplier($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)){
        throw new Exception("Les deux parametres doivent etre des nombres");
        
    }
    return $a* $b;
}

try //Essaie des instructions situés dans ce boc.
{
    echo multiplier(10, 3). '<br/>';
    echo multiplier("Bonjour", 20);
} 
catch (Exception $e) // Exception levée 
{
    echo "Une exception s'est produite. Message d'erreur : ",
            $e -> getMessage();

}
 finally {
    echo '<br/>';
    echo 'Fin'; // Fin du script.
}
?>