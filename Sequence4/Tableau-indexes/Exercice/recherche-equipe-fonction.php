<?php
$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];
$choixEquipe = readline("saisir une equipe : ");
$maj =ucfirst($choixEquipe);
if (in_array($maj,$equipes)) {
    echo "L'équipe participe a la coupe du monde!!!!";
} else {
    echo "L'équipe ne participe pas a la coupe du monde.";
}