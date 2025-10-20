<?php
$numero = trim(fgets(STDIN));

$fora = 0;
$dentro = 0;

for ($i = 0; $i < $numero; $i++) {
    $x= trim(fgets(STDIN));
    if ($x >= 10 && $x <= 20) {
        $dentro++;
    } else {
        $fora++;
    }
}
echo "$dentro in\n";
echo "$fora out\n";
