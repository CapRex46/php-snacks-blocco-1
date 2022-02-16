<?php
$numbers= 15;
$numbersgen = [];

for ($i = 0; $i < $numbers; $i++) {
    $newnumber = rand(1, 100);
    if(!in_array($newnumber, $numbersgen)) {
        $numbersgen[] = $newnumber;
    } else {
        $i--;
    }
}


var_dump($numbersgen);