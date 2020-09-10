<?php

echo "Mau Hitung apa ? " . "\n";
echo "1. Luas " . "\n" . "2. Keliling" . "\n";
echo "Pilih : ";
$pilih = trim(fgets(STDIN));

echo "Masukkan lebar : ";
$width = (int) trim(fgets(STDIN));
echo "Masukkan panjang : ";
$length = (int) trim(fgets(STDIN));

$calcRectangleArea = function () use ($width, $length, $pilih) {

    if ($pilih == 1) {

        $hasil = $width * $length;

        $tampil = "Luas Persegi Panjang : " . $hasil . "\n";
    } else if ($pilih == 2) {

        $hasil = ($width + $length) * 2;

        $tampil = "Keliling Persegi Panjang : " . $hasil . "\n";
    } else {
        echo "Input yang anda masukkan tidak Valid ! " . "\n";
    }
    return $tampil;
};

$hasil = $calcRectangleArea();
echo $hasil;
