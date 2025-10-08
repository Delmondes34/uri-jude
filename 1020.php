<?php

$valorInicial = trim(fgets(STDIN));

$anos = intdiv($valorInicial , 365);
$resAnos = $valorInicial % 365;
$mes = intdiv($resAnos , 30);
$dias = $resAnos % 30;

echo "$anos ano(s)\n";
echo "$mes mes(es)\n";
echo "$dias dia(s)\n";
