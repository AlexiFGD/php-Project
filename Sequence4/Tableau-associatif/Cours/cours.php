<?php
// Déclarer et initialiser un tableau
// Valeur : note
$notes = [
    "durand" => 12,
    "martin" => 10,
    "dupond" => 8,
    "dupont" => 15,
];
// afficher l'ensemble des notes
foreach($notes as $note){
    echo "$note ";
}
echo PHP_EOL;
// afficher le nom de l'étudiant avec sa note
foreach ($notes as $etudiant => $note){
    echo "$etudiant:$note\n";
}
// afficher le nom de tout les étudiant
$etudiants = array_keys($notes);
foreach ($etudiants as $etudiant){
    echo "$etudiant ";
}
echo PHP_EOL;
// ajouter l'étudiant qui s'appelle "petit" avec la note 9
$notes["petit"] = 9; // $tableau["clef"] = valeur
// modifier la note de l'étudiaant "Durand" => 13
$notes["durand"] = 13;
// toujours afficher le nom et la note de chaque de chaque étudiant
// Contrainte : le nom de l'étudiant doit etre en miniscule et la premiere lettre en majuscule
foreach ($notes as $etudiant => $note){
    $etudiant = ucfirst(strtolower($etudiant));
    echo "$etudiant:$note\n";
}
// Supprimer l'étudiant "Petit" avec ça note
unset($notes["petit"]);
// afficher la liste des étudiant trié par ordre alphabétique
$etudiants = array_keys($notes);
sort($etudiants); // trie les éléments par ordre croissant
    echo print_r($etudiants);
echo PHP_EOL;
//afficher la notes maximale
echo max($notes);
echo PHP_EOL;
// Afficher les noms des étudiants ayants une note >= 10
// si la liste est vide afficher message
// récuppérer uniquement les éléments qui satisfont une condition
$etudiants = [];
foreach ($notes as $nom => $note){
    if ($note >= 10){
        $etudiants[] = $nom;
    }
}
// affichage
if (empty($etudiants)){
    echo "aucun etudiant sup ou inf a 10";
} else {
    foreach ($etudiants as $etudiant){
        echo "$etudiant ";
    }
}
echo PHP_EOL;
// calculer est afficher la moyenne des note
// version bourrin
if (empty($notes == false)){
    $somme = 0;
    foreach ($notes as $note){
    $somme+=$note;
    }
    $moyenne = round($somme/count($notes),2);
    echo $moyenne;
}
echo PHP_EOL;
// version classe !
if (!empty($notes)){
    $moyenne = round(array_sum($notes)/count($notes),2);
    echo $moyenne;
}