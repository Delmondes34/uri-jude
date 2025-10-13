<?php

list($T1, $T2, $T3, $T4) = explode(' ', trim(fgets(STDIN)));

$result = ($T1 + $T2 + $T3 + $T4) - 3;

echo "$result\n";