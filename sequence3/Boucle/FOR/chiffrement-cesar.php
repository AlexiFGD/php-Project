<?php
$phrase = readline("Ecrire une phrase : ");
$clef = readline("La clef : ");
for ($i = 0; $i < strlen($phrase); $i++) {
    $car = substr($phrase,$i,1);
    for ($a=1;$a<=$clef;$a++){
        $car++;
    }if (strlen($car>=2)){
        $car = substr($car,-1,1);
    }
    echo $car;
}