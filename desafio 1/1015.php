<?php

$linha1 = explode(" ", trim(fgets(STDIN)));
$x1 = floatval($linha1[0]);
$y1 = floatval($linha1[1]);

$linha2 = explode(" ", trim(fgets(STDIN)));
$x2 = floatval($linha2[0]);
$y2 = floatval($linha2[1]);


$verDis = sqrt((($x2 - $x1) * ($x2 - $x1)) + (($y2 - $y1) * ($y2 - $y1)));
$verDis = number_format($verDis, 4, ".", "");
echo "$verDis" . PHP_EOL;