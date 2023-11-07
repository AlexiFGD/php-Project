<?php
$mdp = readline("Veuillez entré votre mot de passe : ");
// variable nb de lettre + tailleMdp
$tailleMdp = strlen($mdp);
$nbLettre = 0;
$a=0;
$b=0;
$c=0;
$d=0;
//verifie si le mot de passe est superieur ou inferieur a 8 caractere
if ($tailleMdp>=8){
   $d++;
}
while ($nbLettre<$tailleMdp) {
    $tmp = substr($mdp, $nbLettre, 1);
    // verifier s'il y a des majuscule, nombre, minuscule
if (ctype_upper($tmp)){
    $a++;
    }
elseif (ctype_lower($tmp)){
    $b++;
}
elseif (is_numeric($tmp)){
    $c++;
}
    $nbLettre++;
}
if (($a>0)&&($b>0)&&($c>0)&&($d>0)){
    echo "le mot de passe est valide";
} else {
    echo "le mot de passe est invalide";
}