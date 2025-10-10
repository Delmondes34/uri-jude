<?php
$linha  = explode(" ", trim(fgets(STDIN)));
$conta  = intval($linha[0]);


echo "$conta\n";
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
$num1 = intdiv($conta , 1);


echo "$num100 nota(s) de R$ 100,00\n"; 
echo "$num50 nota(s) de R$ 50,00\n"; 
echo "$num20 nota(s) de R$ 20,00\n";
echo "$num10 nota(s) de R$ 10,00\n";
echo "$num5 nota(s) de R$ 5,00\n";
echo "$num2 nota(s) de R$ 2,00\n";
echo "$num1 nota(s) de R$ 1,00\n";

