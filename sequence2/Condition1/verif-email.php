<?php
$email=readline("Saisir une @ mail : ");
if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
    echo "L'email est valide";
} else {
    echo "l'email n'est pas valide";
}
