<?php

$km = trim(fgets(STDIN));
$litro = trim(fgets(STDIN));
$litro = number_format($litro, 1, ".", "");

$kmLi =$km /$litro;
$kmLi = number_format($kmLi, 3, ".", "");
echo "$kmLi km/l" . PHP_EOL;


