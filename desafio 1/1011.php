<?php

$linha = explode(" ", trim(fgets(STDIN)));
$R = floatval($linha[0]);
const pi = 3.14159;

$raio=(4 / 3.0) * pi * ($R * $R * $R);
$raio = number_format($raio, 3 , ".", "");
echo "VOLUME = $raio" . PHP_EOL;

?>