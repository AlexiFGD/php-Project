<?php
$ht = readline("saisir un prix :");
$tva = readline("saisir un taux de tva :");
echo round($ht+$ht*($tva/100),2) ;
