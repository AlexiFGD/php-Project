<?php
// Demander la saisie d'un nombre + Afficher si le nombre est positif ou negatif
$nombre = readline("écrire un nombre : ");
if ($nombre>=0){
    echo "le nombre $nombre est positif : ";
} else {
    echo "le nombre $nombre est negatif : ";
};