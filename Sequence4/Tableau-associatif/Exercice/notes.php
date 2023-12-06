<?php
$notes = [
    "durand" => 12,
    "martin" => 10,
    "dupond" => 8,
    "dupont" => 15,
];
$notes["durand"] = 11;
$notes["dupond"] = 16;
$notes["fred"] = 16;
foreach ($notes as $etudiant => $note){
    echo "$etudiant:$note\n";
}