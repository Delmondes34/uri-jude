<?php

$segundo = intval(fgets(STDIN));
$minuto = intval($segundo , 60);
$minuto = max (60);
$minuto -= $segundo * 60;
$minuto = floor($minuto); 
$hora = ($segundo / 60) / 60;
$hora = round($hora);

number_format($segundo, 2);
number_format($minuto, 2);

echo "$hora:$minuto:$segundo\n";