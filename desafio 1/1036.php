<?php

list($a, $b, $c) = explode(" ", trim(fgets(STDIN)));

$delta = ($b * $b) - (4 * $a * $c);

if ($a == 0 || $delta < 0) {
    echo "Impossivel calcular\n";
} else {
    $raiz1 = (-$b + sqrt($delta)) / (2 * $a);
    $raiz2 = (-$b - sqrt($delta)) / (2 * $a);

    echo "R1 = " . number_format($raiz1, 5, '.', '') . PHP_EOL;
    echo "R2 = " . number_format($raiz2, 5, '.', '') . PHP_EOL;
}
