<?php
$salarioini = trim(fgets(STDIN));

if ($salarioini <= 400.00) {

    $aumento = ($salarioini * 15) / 100;
    $salariofinal = $salarioini + $aumento;

    echo "Novo salario: " . number_format($salariofinal, 2, '.', '') . "\n";
    echo "Reajuste ganho: " . number_format($aumento, 2, '.', '') . "\n";
    echo "Em percentual: 15 %\n";
} elseif ($salarioini > 400.00 && $salarioini <= 800.00) {

    $aumento = ($salarioini * 12) / 100;
    $salariofinal = $salarioini + $aumento;

    echo "Novo salario: " . number_format($salariofinal, 2, '.', '') . "\n";
    echo "Reajuste ganho: " . number_format($aumento, 2, '.', '') . "\n";
    echo "Em percentual: 12 %\n";
} elseif ($salarioini > 800.00 && $salarioini <= 1200.00) {

    $aumento = ($salarioini * 10) / 100;
    $salariofinal = $salarioini + $aumento;

    echo "Novo salario: " . number_format($salariofinal, 2, '.', '') . "\n";
    echo "Reajuste ganho: " . number_format($aumento, 2, '.', '') . "\n";
    echo "Em percentual: 10 %\n";
} elseif ($salarioini > 1200.00 && $salarioini <= 2000.00) {

    $aumento = ($salarioini * 7) / 100;
    $salariofinal = $salarioini + $aumento;

    echo "Novo salario: " . number_format($salariofinal, 2, '.', '') . "\n";
    echo "Reajuste ganho: " . number_format($aumento, 2, '.', '') . "\n";
    echo "Em percentual: 7 %\n";
} else {

    $aumento = ($salarioini * 4) / 100;
    $salariofinal = $salarioini + $aumento;

    echo "Novo salario: " . number_format($salariofinal, 2, '.', '') . "\n";
    echo "Reajuste ganho: " . number_format($aumento, 2, '.', '') . "\n";
    echo "Em percentual: 4 %\n";
}
