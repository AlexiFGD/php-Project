<?php
require "../Cours/cours_fonction.php";
$prenom = readline("Ecrire prenom : ");
$nom = readline("Ecrire nom : ");
$identite = identite($prenom, $nom);
echo "Votre identité est $identite";