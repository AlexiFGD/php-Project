<?php
$nombre = 0;
$nombreSaisie = readline("Saisissez un nombre :  ");
$somme=0;
while ($nombre <= $nombreSaisie ) {
    echo $nombre . ' ';
    $somme=$somme+$nombre;
    $nombre = $nombre + 2;
    }
echo "\nla somme est de ".$somme;