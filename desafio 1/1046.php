<?php
list($start_hour, $end_hour) = array_map('intval', explode(' ', fgets(STDIN)));

$duration;

if ($start_hour < $end_hour) {
    $duration = $end_hour - $start_hour;
} elseif ($start_hour > $end_hour) {
    $duration = (24 - $start_hour) + $end_hour;
} else {
    $duration = 24;
}
echo "O JOGO DUROU " . $duration . " HORA(S)\n";
