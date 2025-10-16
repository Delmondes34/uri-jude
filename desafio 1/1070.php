<?php
$x = (int)fgets(STDIN);

if ($x % 2 == 0) {
    $x++;
}

for ($i = 0; $i < 6; $i++) {
    echo $x . "\n";
    $x += 2;
}
