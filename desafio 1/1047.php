<?php
$line = explode(" ", readline());
$h_start = (int)$line[0];
$m_start = (int)$line[1];
$h_end = (int)$line[2];
$m_end = (int)$line[3];

$inicio_minutos = $h_start * 60 + $m_start;
$final_minutes = $h_end * 60 + $m_end;

if ($final_minutes <= $inicio_minutos) {
    $duracaoMi = (24 * 60 - $inicio_minutos) + $final_minutes;
} else {
    $duracaoMi = $final_minutes - $inicio_minutos;
}

$duracaoHo = floor($duracaoMi / 60);
$duracaoMi_final = $duracaoMi % 60;

if ($h_start == $h_end && $m_start == $m_end) {
    $duracaoHo = 24;
    $duracaoMi_final = 0;
}

echo "O JOGO DUROU $duracaoHo HORA(S) E $duracaoMi_final MINUTO(S)\n";
