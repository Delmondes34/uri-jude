<?php

$segundo = intval(fgets(STDIN));

$hours = floor($segundo / 3600);

$remainingSeconds = $segundo % 3600;

$minutes = floor($remainingSeconds / 60);

$seconds = $remainingSeconds % 60;

echo "{$hours}:{$minutes}:{$seconds}\n";
