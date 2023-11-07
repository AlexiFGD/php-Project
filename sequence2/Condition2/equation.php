<?php
$a = readline("Entrer coéficien a : ");
$b = readline("Entrer coéficien b : ");
$c = readline("Entrer coéficien c : ");
echo "Résolution de l'équation".$a."x+*2+".$b."x+$c\n";
$delta = $b*$b - (4*$a*$c);
if ($delta<0) {
    echo "cette équation n’a pas de solutions";
} elseif ($delta == 0) {
    echo "cette équation a une racine double égale à ".-$b/(2*$a);
} if ($delta > 0) {
    $x1 = -($b-sqrt($delta))/(2*$a);
    $x2 = -($b+sqrt($delta))/(2*$a);
    echo "cette équation a deux racines : $x1 et $x2";
}