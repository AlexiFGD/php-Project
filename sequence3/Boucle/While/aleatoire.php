<?php
$nombre = readline("Saisir un nombre entre 0 et 1000 : ");
$aleatoire=0;
$coups=0;
while ($nombre > 1000 || $nombre < 0) {
    echo "le nombre doit etre compris entre 0 et 1000 !\n";
    $nombre = readline("Saisir un nombre entre 0 et 1000 : ");
}
while ($nombre!=$aleatoire) {
    if ($coups ==200) {
    echo "tu n'as pas deviner en moins 200 coups\n";
    break;
}
$aleatoire = random_int(0,1000);
 $coups = $coups +1;
}
echo "tu as trouver en $coups coups";