<?php
$livres = ["Les Misérables:Victor Hugo:1862:Roman historique:978-0-679-60129-2"];
//1. Extraire et afficher les informations du livre
//2. utiliser la fonction explode
//3. explode(":", $livres) (la fonction explose la chaine de caractere a chaque fois qu'il croise le séparateure)
//4. index -> "Les miserable"=0    "Victore hugo"=1  "1862"=3  "Roman"=4 "978-2-786"=5
$livretab = explode(":",$livres);
foreach ($livretab as $info){
    echo $info;
}
echo PHP_EOL;
//5. utiliser la fonction list()
list($titre, $auteur, $annee, $genre, $isbn) = explode(":",$livres);
echo "$titre, $auteur, $annee, $genre, $isbn";
echo PHP_EOL;
//6. utiliser le destructuring de tableau (A partir de PHP7.1)
[$titre, $auteur, $annee, $genre, $isbn]= explode(":",$livres);
echo "$titre, $auteur, $annee, $genre, $isbn";
echo PHP_EOL;
//7. afficher le titre est l'année du livre (version simple)
echo "$livretab[0] $livretab[2]";
//8. afficher le titre est l'année du livre (version list)
list($titre,,$annee) = explode(":",$livres);
echo "$titre in $annee";
echo PHP_EOL;
//9. afficher le titre est l'année du livre (version destructuring)
[$titre,,$annee] = explode(":",$livres);
echo "$titre in $annee";
echo PHP_EOL;
//10. afficher l'auteur du livre (version destructuring)
[,$auteur] = explode(":",$livres);
echo "$auteur";
echo PHP_EOL;
//11. afficher l'isbn du livre
[,,,,$isbn] = explode(":",$livres);
echo "$isbn";
echo PHP_EOL;