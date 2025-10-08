<?php

$funcionario = trim(fgets(STDIN));
$hora = trim(fgets(STDIN));
$horaTrabalhada = trim(fgets(STDIN));
$salario = $hora * $horaTrabalhada;
$salario = number_format($total, 2 , ".", "");
echo "NUMBER = $funcionario\n";
echo "SALARY = U$ $salario\n";

