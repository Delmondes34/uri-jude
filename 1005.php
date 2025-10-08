<?php

$A = trim(fgets(STDIN));
$B = trim(fgets(STDIN));
$X = ((3.5 * $A )+(7.5 * $B)) / 11;
$media = number_format($X, 5 , ".", "");
echo "MEDIA = " . "$media". PHP_EOL;


