<?php
$number = intval(fgets(STDIN));

for ($i = 1; $i <= $number; $i++) {
    $resultato = $i * $i;
    if($i % 2 == 0){
        echo "$i^2 = $resultato\n";
    }
}
