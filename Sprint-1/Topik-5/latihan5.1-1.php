<?php

// Latihan 1 (STATIS)

function calcRectangleArea(int $width, int $length)
{
    return $width * $length;
}

echo "Masukkan lebar : ";
$width = trim(fgets(STDIN));
echo "Masukkan panjang : ";
$length = trim(fgets(STDIN));

$hasil = calcRectangleArea($width, $length);
echo "Luas Persegi Panjang : $hasil" . "\n";
