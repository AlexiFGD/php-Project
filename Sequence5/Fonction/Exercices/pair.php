<?php
// inclure le fichier cour fonction dans lequel la fonctiont est definis
require "../Cours/cours_fonction.php";
$nombre = readline("Ecrire un nombre : ");
if (nombrePair($nombre)) {
    echo "le $nombre est pair";
} else {
    echo "le $nombre est impair";
}

