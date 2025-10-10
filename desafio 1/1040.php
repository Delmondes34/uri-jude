<?php

list($n1, $n2, $n3, $n4) = explode(' ', trim(fgets(STDIN)));

$media = (($n1 * 2) + ($n2 * 3) + ($n3 * 4) + ($n4 * 1)) / 10;
echo "Media: " . number_format($media, 1, '.', '') . PHP_EOL;

if ($media >= 7.0) {
    echo "Aluno aprovado." . PHP_EOL;;
} elseif ($media < 5.0) {
    echo "Aluno reprovado." . PHP_EOL;;
} else {
    echo "Aluno em exame." . PHP_EOL;;
    $notaDoExa = floatval(trim(fgets(STDIN)));
    echo "Nota do exame: " . number_format($notaDoExa, 1, '.', '') . PHP_EOL;

    $mediaFinal = ($notaDoExa + $media) / 2;

    if ($mediaFinal >= 5) {
        echo "Aluno aprovado.\n";
    } else {
        echo "Aluno reprovado.\n";
    }
    echo "Media final: " . number_format($mediaFinal, 1, '.', '') . PHP_EOL;
}
