<?php

$calcRectangleArea = function (int $width, int $length) {
    return $width * $length;
};

echo "Masukkan Lebar : ";
$width = trim(fgets(STDIN));

echo "Masukkan Tinggi : ";
$length = trim(fgets(STDIN));

$hasil = $calcRectangleArea($width, $length);

echo "Luas Persegi Panjang = " . $hasil . "\n";
var_dump($hasil);
