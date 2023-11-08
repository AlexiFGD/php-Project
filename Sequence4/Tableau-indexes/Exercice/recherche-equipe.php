<?php
$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];
$choixEquipe = readline("Saisir une équipe : ");
$maj = ucfirst($choixEquipe);
foreach ($equipes as $equipe){
    if ($equipe == $maj){
        echo "l'equipe participe a la coupe du monde";
    }
}