<?php

echo "Mau Hitung Luas Bangun Apa ? " . "\n";
echo "1. Segitiga" . "\n" . "2. Lingkaran" . "\n" . "3. Trapesium " . "\n";

echo "Pilih : ";
$pilihan = trim(fgets(STDIN));



if ($pilihan == 1) {
    // Luas Segitiga

    function luasSegitiga(int $width, int $lenght)
    {
        return ($width * $lenght) / 2;
    }

    echo "Masukkan lebar : ";
    $l = trim(fgets(STDIN));
    echo "Masukkan panjang : ";
    $p = trim(fgets(STDIN));

    $hasil = luasSegitiga($l,  $p);
    echo "Luas Segitiga : " . $hasil . "\n";
} else if ($pilihan == 2) {
    // Luas Lingkaran

    function luasLingkaran(int $r)
    {
        return pi() * $r * $r;
    }

    echo "Masukkan Jari-jari : ";
    $r = trim(fgets(STDIN));

    $hasil = luasLingkaran($r);
    echo "Luas Lingkaran : " . $hasil . "\n";
} else if ($pilihan == 3) {
    // fungsi Trapesium

    function luasTrapesium($a, $b, $t)
    {
        return ($a + $b) * $t / 2;
    }

    echo "Sisi Sejajar 1 : ";
    $a = trim(fgets(STDIN));

    echo "Sisi sejajar 2 : ";
    $b = trim(fgets(STDIN));

    echo "Tinggi : ";
    $t = trim(fgets(STDIN));

    $hasil = luasTrapesium($a, $b, $t);
    echo "Luas Trapesium : " . $hasil . "\n";
}
