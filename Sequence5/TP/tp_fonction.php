<?php
// Conversion de température
function celsiusToFarenheigt (float $temperatures): float{
   $resultat = ($temperatures * 9 / 5 ) + 32;
    return $resultat;
}
$temperatures = readline("Ecrire une température : ");
$resultat = celsiusToFarenheigt($temperatures);
echo $resultat;
// Génération d'un mot de passe
function genererMDP(int $longueur):string{

    $caracteres[] = ["ABCDEFGHIJKLMNOPGRSTUVXYZabcdefghijkmnopqrstuvwxyz0123456789!@#$%^&*()"];
    return mt_rand($caracteres);
}
$caracteres[] = ["ABCDEFGHIJKLMNOPGRSTUVXYZabcdefghijkmnopqrstuvwxyz0123456789!@#$%^&*()"];
echo genererMDP($caracteres);