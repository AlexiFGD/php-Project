<?php
$notes=[10,12.5,14,7,15,9.5,8];
$noteMax = 0;

for ($i = 0; $i < count($notes); $i++) {
    if ($notes[$i] > $noteMax) {
        $noteMax = $notes[$i];
    }
}

echo "La note la plus élevée est : " . $noteMax;
echo PHP_EOL;
// avec fonction
echo max($notes);