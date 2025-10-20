<?php
$d1Linha = explode(" ", trim(fgets(STDIN)));
$d1 = (int)$d1Linha[1];

$h1Linha = explode(" : ", trim(fgets(STDIN)));
$h1 = (int)$h1Linha[0];
$m1 = (int)$h1Linha[1];
$s1 = (int)$h1Linha[2];

$d2Linha = explode(" ", trim(fgets(STDIN)));
$d2 = (int)$d2Linha[1];

$h2Linha = explode(" : ", trim(fgets(STDIN)));
$h2 = (int)$h2Linha[0];
$m2 = (int)$h2Linha[1];
$s2 = (int)$h2Linha[2];

$segundo_ini = $s1 + $m1 * 60 + $h1 * 3600 + $d1 * 86400;
$segundo_final = $s2 + $m2 * 60 + $h2 * 3600 + $d2 * 86400;

$dura = $segundo_final - $segundo_ini;

$dias = floor($dura / 86400);
$dura %= 86400;

$horas = floor($dura / 3600);
$dura %= 3600;

$minutos = floor($dura / 60);
$segundos = $dura % 60;

// Exibir resultados
echo "$dias dia(s)\n";
echo "$horas hora(s)\n";
echo "$minutos minuto(s)\n";
echo "$segundos segundo(s)\n";
