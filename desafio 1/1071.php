<?php
list($x, $y) = explode(' ', intval(fgets(STDIN)));

$d = 0;
if ($x > $y) {
    list($x, $y) = array($y, $x);
}
for ($i = $x + 1; $i < $y; $i++) {
    if ($i % 2 != 0) {
        $d += $i;
    }
}
echo $d . "\n";