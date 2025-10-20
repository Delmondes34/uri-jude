<?php
$line = file('php://stdin', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$n = (int) $line[0];

for ($i = 1; $i <= $n; $i++) {
    $number = (int)$line[$i];
    
    if ($number == 0) {
        echo "NULL\n";
    } else {
        $parity = ($number % 2 === 0) ? "EVEN" : "ODD";
        $sign = ($number > 0) ? "POSITIVE" : "NEGATIVE";
        echo "$parity $sign\n";
    }
}
