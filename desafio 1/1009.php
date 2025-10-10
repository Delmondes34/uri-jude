<?php
$vendedor = trim(fgets(STDIN));
$salario = trim(fgets(STDIN));
$comicao = trim(fgets(STDIN));
$salario = number_format($salario, 2 , "." ,"");
$comicao = number_format($comicao, 2 ,"." ,"");
$total = (($comicao * 15) / 100) + $salario;
$total = number_format($total, 2 , ".", "");
echo "TOTAL = R$ $total" . PHP_EOL;

