<?php
$note = readline("Saisir une note : ");
while ($note>20||$note<0){
    echo "La note est incorrecte !\n";
    $note=readline("Saisir une note : ");
}
echo "la note est correcte";
