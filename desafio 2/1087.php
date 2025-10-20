<?php
while (true) {
    $line = explode(" ", readline());
    $x1 = (int)$line[0];
    $y1 = (int)$line[1];
    $x2 = (int)$line[2];
    $y2 = (int)$line[3];

    if ($x1 == 0 && $y1 == 0 && $x2 == 0 && $y2 == 0) {
        break;
    }

    if ($x1 == $x2 && $y1 == $y2) {
        echo "0\n";
    }

    elseif ($x1 == $x2 || $y1 == $y2 || abs($x1 - $x2) == abs($y1 - $y2)) {
        echo "1\n";
    }

    else {
        echo "2\n";
    }
}
