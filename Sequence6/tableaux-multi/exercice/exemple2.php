<?php

// Déclaration d'un tableau indexé bi-dimensionnel
// dont les valeurs sont des tableaux associatifs

// Déclarer un tableau indexé '$personnes'
// Chaque élément représente une personne avec son nom, son prénom et son âge
// La valeur de l'élément est un tableau associatif avec les clés "nom", "prenom" et "age"
// Chaque valeur est indexée par un entier
// Chaque valeur possède les mêmes clés, la même structure
$personnes = [
    ["nom" => "Dupont", "prenom" => "Jean", "age" => 25],
    ["nom" => "Durand", "prenom" => "Paul", "age" => 30],
    ["nom" => "Martin", "prenom" => "Marie", "age" => 20]
];

echo "-------------------------------------" . PHP_EOL;
// Afficher une valeur particulière du tableau
echo $personnes[1]["prenom"] . PHP_EOL;
// Afficher toutes les valeurs du tableau
echo "-------------------------------------" . PHP_EOL;
foreach ($personnes as $personne){
    //$personnes est un tableau associatif
    foreach ($personne as $valeur){
        echo "$valeur ";
    }
    echo PHP_EOL;
}
echo PHP_EOL;
// Afficher toutes les valeurs du tableau avec le destructuring PHP7.1 ou plus
// Utilisation possible car chaque valeur (tableau associatif) possède les mêmes clés
echo "-------------------------------------" . PHP_EOL;
foreach ($personnes as $personne){
    // destructurer $personne
    ["nom" => $nom, "prenom" => $prenom, "age" => $age] = $personne;
    echo "$nom $prenom $age". PHP_EOL;
}

// Afficher tous les éléments (index et valeur) du tableau
echo "-------------------------------------" . PHP_EOL;
foreach ($personnes as $index => $personne){
    echo "$index ";
    foreach ($personne as $clef => $valeur){
        echo "[$clef] : $valeur";
    }
    echo PHP_EOL;
}

// Calculer la moyenne d'âge des personnes du tableau
echo "-------------------------------------" . PHP_EOL;
if (!empty($personnes)){
    $somme = 0;
    foreach ($personnes as $personne){
        $somme += $personne["age"];
    }
    $moyenne = $somme / count($personnes);
    echo $moyenne;
}
