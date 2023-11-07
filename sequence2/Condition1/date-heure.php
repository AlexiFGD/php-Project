<?php
date_default_timezone_set('France/Paris');
$Date = date('d-m-Y');
$Time = date('H:i:s');
echo "Nous somme le $Date.\n";
echo "Et il est $Time.\n";
if ($Time>13) {
    echo "bonne après midi";
} else {
    echo "Bonne matiné";
}