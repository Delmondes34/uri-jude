<?php
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));
$X = ((2 * $a)+(3 * $b)+(5 *$c)) / 10;
$media = number_format($X, 1 , ".", "");
echo "MEDIA = " . "$media". PHP_EOL;

