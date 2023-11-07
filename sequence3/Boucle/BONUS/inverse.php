<?php
// Demander à l'utilisateur de saisir une phrase
echo "Veuillez saisir une phrase : ";
$phrase = readline();

// Initialiser une variable pour stocker la phrase à l'envers
$phraseEnvers = "";

// Trouver la longueur de la phrase
$longueur = strlen($phrase);

// Initialiser un index pour parcourir la phrase à partir de la fin
$index = $longueur - 1;

// Utiliser une boucle while pour inverser la phrase
while ($index >= 0) {
    $caractere = substr($phrase, $index, 1);
    $phraseEnvers .= $caractere;
    $index--;
}

// Afficher la phrase à l'envers
echo "La phrase à l'envers est : $phraseEnvers \n";
