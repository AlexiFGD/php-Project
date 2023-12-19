<?php

// Déclaration d'un tableau indexé bi-dimensionnel
// dont les valeurs sont des tableaux indexés d'entiers
// Chaque valeur peut être un tableau de taille différente
$tab = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9, 10]
];

// Afficher une valeur particulière du tableau
echo $tab[0][1] . PHP_EOL;

// Afficher toutes les valeurs du tableau
foreach ($tab as  $ligne1){
    foreach ($ligne1 as $nb){
        echo $nb." ";
    }
}
echo PHP_EOL;
    // $ligne1 est un tableau indexé


// Afficher tous les éléments (index et valeur) du tableau
foreach ($tab as $index => $ligne){
    echo "$index : ";
    foreach ($ligne as $index2 => $nb){
        echo "[$index2] $nb ";
    }
    echo PHP_EOL;
}

