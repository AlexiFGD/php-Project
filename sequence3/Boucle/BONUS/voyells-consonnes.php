<?php
$phrase = readline("Écrire une phrase : ");
// Initialiser des compteurs pour les voyelles et les consonnes
$nombreVoyelles = 0;
$nombreConsonnes = 0;
// Initialiser une variable pour stocker les voyelles
$voyelle = "a,e,i,o,u,A,E,I,O,U";
// Initialiser un index pour parcourir la phrase
$index = 0;
// Trouver la longueur de la phrase
    $longueur = strlen($phrase);
// Utiliser une boucle while pour parcourir la phrase
while ($index < strlen($phrase)) {
    // cette variable permet de prendre un caractere et attendre la prochaine instruction
    $caractere = substr($phrase, $index, 1);
    // cherche la position d'un caractere donné (ici dans la variable voyelle)
        if (strpos($voyelle, $caractere) == true) {
            $nombreVoyelles++;
        } else {
            $nombreConsonnes++;
        }
    $index++;
}
// Afficher le résultat
echo "Nombre de voyelles : $nombreVoyelles \n";
echo "Nombre de consonnes : $nombreConsonnes \n";