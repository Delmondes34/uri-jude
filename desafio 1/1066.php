<?php
$pares = 0;
$impares = 0;
$positivo = 0;
$negativo = 0;

for ($i = 0; $i < 5; $i++) {
    $number = floatval(trim(fgets(STDIN)));
    if ($number % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
    if ($number > 0) {
        $positivo++;
    } elseif($number < 0) {
        $negativo++;
    }else{}
}



echo "$pares valor(es) par(es)\n";
echo "$impares valor(es) impar(es)\n";
echo "$positivo valor(es) positivo(s)\n";
echo "$negativo valor(es) negativo(s)\n";
