<?php

fscanf(STDIN, "%f %f %f", $a, $b, $c);

$sides = [$a, $b, $c];
rsort($sides);
$a = $sides[0];
$b = $sides[1];
$c = $sides[2];

if ($a >= $b + $c) {
    echo "NAO FORMA TRIANGULO\n";
} else {
    if ($a * $a == $b * $b + $c * $c) {
        echo "TRIANGULO RETANGULO\n";
    } elseif ($a * $a > $b * $b + $c * $c) {
        echo "TRIANGULO OBTUSANGULO\n";
    } else {
        echo "TRIANGULO ACUTANGULO\n";
    }

    if ($a == $b && $b == $c) {
        echo "TRIANGULO EQUILATERO\n";
    } elseif ($a == $b || $b == $c || $a == $c) {
        echo "TRIANGULO ISOSCELES\n";
    }
}
