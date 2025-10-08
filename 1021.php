<?php
$linha  = explode(" ", trim(fgets(STDIN)));
$conta  = floatval($linha[0]);

echo "NOTAS:\n";
$num100 = intdiv($conta , 100);
$conta -= $num100 * 100;
$num50 = intdiv($conta , 50);
$conta -= $num50 * 50;
$num20 = intdiv($conta , 20);
$conta -= $num20 * 20;
$num10 = intdiv($conta , 10);
$conta -= $num10* 10;
$num5 = intdiv($conta , 5);
$conta -= $num5 * 5;
$num2 = intdiv($conta , 2);
$conta -= $num2 * 2;

echo "$num100 nota(s) de R$ 100.00\n";
echo "$num50 nota(s) de R$ 50.00\n";
echo "$num20 nota(s) de R$ 20.00\n";
echo "$num10 nota(s) de R$ 10.00\n";
echo "$num5 nota(s) de R$ 5.00\n";
echo "$num2 nota(s) de R$ 2.00\n";

echo "MOEDAS:\n";
$num1 = intdiv($conta , 1);
$conta -= $num1 * 1;
$num050 = $conta / 0.50;
$num050 = floor($num050);
$conta -= $num050 * 0.50;
$num025 = $conta / 0.25;
$num025 = floor($num025);
$conta -= $num025 * 0.25;
$num010 = $conta / 0.10;
$num010 = floor($num010);
$conta -= $num010 * 0.10;
$num005 = $conta / 0.05;
$num005 = floor($num005);
$conta -= $num005 * 0.05;
$num001 = $conta / 0.01;
$num001 = round($num001);


echo "$num1 moeda(s) de R$ 1.00\n";
echo "$num050 moeda(s) de R$ 0.50\n";
echo "$num025 moeda(s) de R$ 0.25\n";
echo "$num010 moeda(s) de R$ 0.10\n";
echo "$num005 moeda(s) de R$ 0.05\n";
echo "$num001 moeda(s) de R$ 0.01\n";