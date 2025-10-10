<?php
list($codigo, $quantidade) = explode(' ', trim(fgets(STDIN)));

$valor = 0.00;

switch ($codigo) {
    case  1:
        $valor = 4.00;
        break;
    case  2:
        $valor = 4.50;
        break;
    case 3:
        $valor = 5.00;
        break;
    case  4:
        $valor = 2.00;
        break;
    case  5:
        $valor = 1.50;
        break;
}

$total = $valor * $quantidade;

printf("Total: R$ %.2f\n", $total);
