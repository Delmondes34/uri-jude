<?php

$aleatorio  = trim(fgets(STDIN));
$tempo = (60 *$aleatorio)/30;
$tempo=number_format($tempo, 0, ".", "");
echo "$tempo minutos\n";