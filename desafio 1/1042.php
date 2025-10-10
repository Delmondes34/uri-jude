<?php
list($valor1, $valor2, $valor3) = explode(' ', trim(fgets(STDIN)));

$cresente = [$valor1, $valor2, $valor3];
sort($cresente);

foreach ($cresente as $cres) {
    echo $cres . "\n";
}
echo "\n";

echo $valor1 . "\n";
echo $valor2 . "\n";
echo $valor3 . "\n";
