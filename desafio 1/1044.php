<?php
list($A, $B) = explode(' ', trim(fgets(STDIN)));

$verificacao1 = $A % $B;
$verificacao2 = $B % $A;

if ($verificacao1 == 0 || $verificacao2 == 0) {
    echo "Sao Multiplos\n";
} else {
    echo "Nao sao Multiplos\n";
}
