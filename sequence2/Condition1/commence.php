<?php
// demander la saise d'un mot et ensuite afficher si le mot commence par la lettre p
$mot = readline("écrire un mot : ");
$mot = strtolower($mot);
if (substr($mot,0,1)=='p') {
    echo "Vrai.\n";
} else {
    echo "Faux.\n";
}
// Affiche si le mot contient 5 caractere
if (strlen($mot)>=5) {
    echo "Contient 5 charatères";
} else {
    echo "Mais ne contient pas 5 charactères";
}

//$mot = readline("écrire un mot : ");
//if (str_starts_with($mot,'p')) {
//   echo "Vrai";
//} else {
//    echo "Faux";
//}