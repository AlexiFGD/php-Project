<?php
$emails = [
    "durand" => "durand@free.fr",
    "martin" => "martin@laposte.net",
    "dupond" => "dupond@gmail.com",
    "dupont" => "dupont@free.fr",
];
foreach ($emails as $nom => $email){
    echo "$nom : $email\n";
}
// Exercices 4
$search = readline("Saisir un nom de domaine : ");
$resultats=[];
foreach ($emails as $nom => $email){
    if (strstr($email, "$search")){
        $resultats[] = $nom;
    }
}
foreach ($resultats as $resultat){
    echo "$resultat ";
}