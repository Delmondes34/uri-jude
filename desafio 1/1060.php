<?php
$numerosPositivos = 0;

for ($i = 0; $i < 6; $i++) {
    $number = floatval(trim(fgets(STDIN)));
    if ($number > 0) {
        $numerosPositivos++;
    }
}

echo $numerosPositivos . " valores positivos\n";