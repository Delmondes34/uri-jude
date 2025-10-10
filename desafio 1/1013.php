<?php

$linha = explode(" ", trim(fgets(STDIN)));
$valorA = intval($linha[0]);
$valorB = intval($linha[1]);
$valorC = intval($linha[2]);

if($valorA > $valorB && $valorA > $valorC)
    echo "$valorA eh o maior\n";
else if($valorB > $valorC)
    echo "$valorB eh o maior\n";
else 
    echo"$valorC eh o maior\n";



