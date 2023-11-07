<?php
$prix = readline("saisir le prix de l'article : ");
$rouge = "\033[41m";
$normal = "\033[0m";
if ($prix<1000) {
    $remise = number_format($prix*0.05, 2, ',', '');
    $prixFinale = number_format($prix-$remise, 2, ',', '');
    echo "La remise est de 5% soit $rouge $remise $normal euros\n";
    echo "Le prix est de $rouge $prixFinale $normal euros";
} elseif ($prix>1000 && $prix<5000) {
    $remise = number_format($prix*0.1, 2, ',', '');
    $prixFinale = number_format($prix-$remise, 2, ',', '');
    echo "La remise est de 10% soit $rouge $remise $normal euros\n";
    echo "Le prix est de $rouge $prixFinale $normal euros";
} else {
    $remise = number_format($prix*0.2, 2, ',', '');
    $prixFinale = number_format($prix-$remise, 2, ',', '');
    echo "La remise est de 20% soit $rouge $remise $normal euros\n";
    echo "Le prix est de $rouge $prixFinale $normal euros";
}