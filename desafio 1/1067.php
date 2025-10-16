<?php
$number = intval(fgets(STDIN));

for ($i = 1; $i <= $number; $i++) {
    if ($i % 2 != 0) {
        echo $i . "\n";
    }
}
