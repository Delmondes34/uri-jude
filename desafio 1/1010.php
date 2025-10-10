<?php
$linha1 = explode(" ",trim(fgets(STDIN)));
$peça1 = intval($linha1[0]);
$numero1 = intval($linha1[1]);
$valor1 = floatval($linha1[2]);

$linha2 = explode(" ",trim(fgets(STDIN)));
$peça2 = intval($linha2[0]);
$numero2 =  intval($linha2[1]);
$valor2 =  floatval($linha2[2]);

$total =($numero1 * $valor1) + ($numero2 * $valor2);
$total = number_format($total, 2 , ".", "");
echo "VALOR A PAGAR: R$ $total" . PHP_EOL ;




