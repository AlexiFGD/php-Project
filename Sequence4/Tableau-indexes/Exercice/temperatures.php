<?php
$temperature = [12,30,25];

foreach ($temperature as $i){
    $fareinheit []=round($i*(5/9)+32);
}
foreach ($fareinheit as $i){
    echo $i." / ";
}