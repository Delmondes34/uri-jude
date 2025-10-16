<?php
$positive_count = 0;
$positive_sum = 0;

for ($i = 0; $i < 6; $i++) {
    $number = floatval(trim(fgets(STDIN)));
    if ($number > 0) {
        $positive_count++;
        $positive_sum += $number;
    }
}

echo $positive_count . " valores positivos\n";

if ($positive_count > 0) {
    $average = $positive_sum / $positive_count;
    echo number_format($average, 1, '.', '') . "\n";
}
