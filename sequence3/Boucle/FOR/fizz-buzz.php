<?php
for ($x=1;$x<=30;$x++){
    if ($x%15==0){
        echo "FizzBuzz ";
    }
    elseif ($x%5==0){
        echo "Buzz ";
    }
    elseif ($x%3==0){
        echo "Fizz ";
    } else {
        echo $x." ";
    }
}