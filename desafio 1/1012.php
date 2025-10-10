<?php
$linha = explode(" ", trim(fgets(STDIN)));
$a = floatval($linha[0]);
$b = floatval($linha[1]);
$c = floatval($linha[2]);
const pi = 3.14159;

$tri = ($a * $c) / 2;
$circ= pi * ($c * $c);
$tra = (($a + $b) * $c) /2;
$qua = $b * $b;
$ret = $a * $b;

$tri = number_format($tri ,3 ,".", "");
$circ = number_format($circ ,3 ,".", "");
$tra = number_format($tra ,3 ,".", "");
$qua = number_format($qua ,3 ,".", "");
$ret = number_format($ret ,3 ,".", "");

echo "TRIANGULO: $tri\n";
echo "CIRCULO: $circ\n";
echo "TRAPEZIO: $tra\n";
echo "QUADRADO: $qua\n";
echo "RETANGULO: $ret\n";