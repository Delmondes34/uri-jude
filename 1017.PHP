<?php

$horas = trim(fgets(STDIN));
$kmHo = trim(fgets(STDIN));

$dis =  $kmHo * $horas;
$litros = $dis / 12;
$litros = number_format($litros, 3 ,".", "");
echo $litros. PHP_EOL;


