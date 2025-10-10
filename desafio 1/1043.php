<?php
list($t1, $t2, $t3) = explode(' ', trim(fgets(STDIN)));

if ($t1 + $t2 > $t3 && $t1 + $t3 > $t2 && $t2 + $t3 > $t1) {
    $perimetro = $t1 + $t2 + $t3;
    echo "Perimetro = " . number_format($perimetro, 1, '.', '') . PHP_EOL;
} else {
    $area = ($t1 + $t2) * $t3 / 2;
    echo "Area = " . number_format($area, 1, '.', '') . PHP_EOL;
}
