<?php
$phrase = readline("écrire une phrase:");
$mot = readline("écrire un mot :");
$total = substr_count($phrase,$mot);
echo "le nombre de $mot est de $total";