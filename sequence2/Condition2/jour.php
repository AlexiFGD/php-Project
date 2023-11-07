<?php
$date = "Aujourd'hui nous sommes le ".date("l d F Y ")."et il est ".date("H\hi");
echo $date."\n";
if ($date=="Sunday") {
    echo ("je vous souhaite un bon dimanche");
} elseif ($date=="Saturday"){
    echo ("je vous souhaite un bon week-end");
} else {
    echo "je vous souhaite un bonne journée";
}