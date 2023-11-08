<?php
// Déclaration et initialisation d'un tableau de notes
$notes = [10,12,9,13,7];
// Afficher les élément du tableau
echo $notes[0]; // 10
echo $notes[1]; // 12
echo $notes[2]; // 19
echo PHP_EOL;
// afficher les éléments du tableau avec une boucle for
for ($i=0; $i<count($notes); $i++){
    echo $notes[$i]."|";
}
echo PHP_EOL;
// Afficher les éléments du tableau avec une boucle "foreach"
foreach ($notes as $note){
    echo $note."|";
}
echo PHP_EOL;
// Afficher les éléments et leur index avec une boucle for
for ($i=0; $i<count($notes); $i++){
    echo "$i:$notes[$i]"."|";
}
echo PHP_EOL;
// Afficher les éléments et leur index avec une boucle foreach
foreach ($notes as $index => $note){
    echo "$index:$note"."|";
}
// Ajouter une nouvelle note dans le tableau
$notes[]=15;
//Affichage en mode "DEBUG"
echo PHP_EOL;
print_r($notes);
// Ajouter plusieur notes dans le tableau
echo PHP_EOL;
array_push($notes,15,12,5);
print_r($notes);