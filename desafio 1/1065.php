<?php
$pares = 0;

for ($i = 0; $i < 5; $i++) {
    $number = floatval(trim(fgets(STDIN)));
    if ($number % 2 ==0) {
        $pares++;
    }
}

echo "$pares valores pares\n";