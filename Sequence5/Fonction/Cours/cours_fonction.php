<?php
// contient l'ensemble des fonctions du projet
function nombrePair(int $nombre): bool{
    return $nombre % 2 == 0;
}
function identite(string $prenom, string $nom): string {
    return strtolower(ucfirst($prenom))." ".strtolower(ucfirst($nom));
}
function incrementer(int& $nb) : void {
    $nb += 1;
}