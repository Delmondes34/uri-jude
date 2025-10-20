<?php

$type = trim(fgets(STDIN));
$class = trim(fgets(STDIN));
$diet = trim(fgets(STDIN));

if ($type == "vertebrado") {
    if ($class == "ave") {
        if ($diet == "carnivoro") {
            echo "aguia\n";
        } else {
            echo "pomba\n";
        }
    } else {
        if ($diet == "onivoro") {
            echo "homem\n";
        } else {
            echo "vaca\n";
        }
    }
} else {
    if ($class == "inseto") {
        if ($diet == "hematofago") {
            echo "pulga\n";
        } else {
            echo "lagarta\n";
        }
    } else {
        if ($diet == "hematofago") {
            echo "sanguessuga\n";
        } else {
            echo "minhoca\n";
        }
    }
}
