<?php

$type = trim(fgets(STDIN));
$class = trim(fgets(STDIN));
$diet = trim(fgets(STDIN));

if ($type == "vertebrado") {
    if ($class == "ave") {
        if ($diet == "carnivoro") {
            echo "aguia\n";
        } else { // onivoro
            echo "pomba\n";
        }
    } else { // mamifero
        if ($diet == "onivoro") {
            echo "homem\n";
        } else { // herbivoro
            echo "vaca\n";
        }
    }
} else { // invertebrado
    if ($class == "inseto") {
        if ($diet == "hematofago") {
            echo "pulga\n";
        } else { // herbivoro
            echo "lagarta\n";
        }
    } else { // anelideo
        if ($diet == "hematofago") {
            echo "sanguessuga\n";
        } else { // onivoro
            echo "minhoca\n";
        }
    }
}

