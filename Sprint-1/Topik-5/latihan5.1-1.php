<?php

function calcRectangleArea()
{
    echo "Mau Hitung apa ? " . "\n";
    echo "1. Luas " . "\n" . "2. Keliling" . "\n";
    echo "Pilih : ";
    $pilih = trim(fgets(STDIN));

    if ($pilih == 1) {

        echo "Masukkan lebar : ";
        $width = (int) trim(fgets(STDIN));
        echo "Masukkan panjang : ";
        $length = (int) trim(fgets(STDIN));

        $hasil = $width * $length;

        $nilai = "Luas Persegi Panjang : " . $hasil . "\n";
    } else if ($pilih == 2) {
        echo "Masukkan lebar : ";
        $width = (int) trim(fgets(STDIN));
        echo "Masukkan panjang : ";
        $length = (int) trim(fgets(STDIN));

        $hasil = ($width + $length) * 2;

        $nilai = "Keliling Persegi Panjang : " . $hasil . "\n";
    } else {
        echo "Input yang anda masukkan tidak Valid ! " . "\n";
    }
    return $nilai;
}

$hasil = calcRectangleArea();
echo $hasil;
