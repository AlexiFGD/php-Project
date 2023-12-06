<?php

    $note = Readline("Saississez une note (q pour arrêter) : ");
    $notes = [];
    $nbNote = 0;
    $moyenne = 0;
    $n = 0;

    while ($note != "q") {
        if ($note < 0 || $note > 20) {
            echo "Valeur saisie incorrect\n";
            $note = Readline("Saississez une note (q pour arrêter) : ");
        }
        $notes[] = $note;
        $note = Readline("Saississez une note (q pour arrêter) : ");
        $nbNote = $nbNote + 1;
    }
    echo "\nVous avez saisie $nbNote notes.\n";
    echo "Les notes saisies sont : ";

    foreach ($notes as $note) {
        echo "$note ";
        if ($note >= 10) {
            $moyenne = $moyenne + $note;
            $n = $n + 1;
        }
    }
        if ($n > 0){
        $moyenne = $moyenne / $n;
        echo "\n La moyenne des notes supérieures ou éguales à 10 est $moyenne.";
} else {
        echo "\nIl n'y a aucune note supérieur ou égale a 10.";
}
