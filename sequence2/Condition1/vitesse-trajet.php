<?php
$distance = readline("saisir la distance du trajet (Km) : ");
$dureeTrajet = readline("saisir la durée du trajet (h:mm) : ");
$heure = substr($dureeTrajet,0,1);
$minute = substr($dureeTrajet,2,4);
$dureeMinute = $heure*60 + $minute;
$vitesse = ceil($distance/$dureeMinute);
echo "le resultat est $vitesse Km/h \n ";
if ($minute>60) {
    echo " ERREUR : la durée $dureeMinute est invalide \n";
    if ($vitesse <= 90) {
        echo "Vous êtes au dessus des 90 Km/h";
    } else {
        echo "Vous êtes en dessous des 90 Km/h";
    }
} else {

}

