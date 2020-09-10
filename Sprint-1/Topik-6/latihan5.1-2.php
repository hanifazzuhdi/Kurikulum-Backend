<?php

// echo "Mau Hitung Luas Bangun Apa ? " . "\n";
// echo "1. Segitiga" . "\n" . "2. Lingkaran" . "\n" . "3. Trapesium " . "\n";

// echo "Pilih : ";
// $pilihan = trim(fgets(STDIN));



// if ($pilihan == 1) {
//     // Luas Segitiga

//     $luasSegitiga = function (int $width, int $lenght) {
//         return ($width * $lenght) / 2;
//     };

//     echo "Masukkan lebar : ";
//     $l = trim(fgets(STDIN));
//     echo "Masukkan panjang : ";
//     $p = trim(fgets(STDIN));

//     $hasil = $luasSegitiga($l,  $p);

//     echo "Luas Segitiga : " . $hasil . "\n";
// } else if ($pilihan == 2) {
//     // Luas Lingkaran

//     $luasLingkaran = function (int $r) {
//         return pi() * $r * $r;
//     };

//     echo "Masukkan Jari-jari : ";
//     $r = trim(fgets(STDIN));

//     $hasil = $luasLingkaran($r);
//     echo "Luas Lingkaran : " . $hasil . "\n";
// } else if ($pilihan == 3) {
//     // fungsi Trapesium

//     $luasTrapesium = function ($a,  $b, $t) {
//         return ($a + $b) * $t / 2;
//     };

//     echo "Sisi Sejajar 1 : ";
//     $a = trim(fgets(STDIN));

//     echo "Sisi sejajar 2 : ";
//     $b = trim(fgets(STDIN));

//     echo "Tinggi : ";
//     $t = trim(fgets(STDIN));

//     $hasil = $luasTrapesium($a, $b, $t);
//     echo "Luas Trapesium : " . $hasil . "\n";
// }



echo "Mau Hitung Luas Bangun Apa ? " . "\n";
echo "1. Segitiga" . "\n" . "2. Lingkaran" . "\n" . "3. Trapesium " . "\n";

echo "Pilih : ";
$pilihan = trim(fgets(STDIN));


echo "Hitung Rumus : " . "\n";
echo "1. Luas" . "\n" . "2. Keliling" . "\n";
echo "Pilih : ";
$rumus = trim(fgets(STDIN));

// Tentukan Segitiga
if ($pilihan == 1) {
    // Luas segitiga
    if ($rumus == 1) {
        // deklarasi fungsi
        echo "Masukkan Alas : ";
        $a = (int) trim(fgets(STDIN));
        echo "Masukkan Tinggi : ";
        $p = (int) trim(fgets(STDIN));

        $luasSegitiga = function () use ($a, $p) {
            return ($a * $p) / 2;
        };

        echo "Luas Segitiga : " . $luasSegitiga() . "\n";
    }
    // Keliling Segitiga
    else if ($rumus == 2) {

        echo "Masukkan Sisi 1 : ";
        $sisi1 = (int) trim(fgets(STDIN));
        echo "Masukkan Sisi 2 : ";
        $sisi2 = (int) trim(fgets(STDIN));
        echo "Masukkan Sisi 3 : ";
        $sisi3 = (int) trim(fgets(STDIN));

        $kelSegitiga = function () use ($sisi1, $sisi2, $sisi3) {
            return $sisi1 + $sisi2 + $sisi3;
        };

        echo "Keliling Segitiga : " . $kelSegitiga() . "\n";
    } else {
        echo "Input Rumus Tidak Valid !";
    }
}
// Tentukan ingkaran 
else if ($pilihan == 2) {
    // Luas Lingkaran
    if ($rumus == 1) {

        echo "Masukkan Jari-jari : ";
        $r = (int) trim(fgets(STDIN));

        $luasLingkaran = function () use ($r) {
            return pi() * $r * $r;
        };

        echo "Luas Lingkaran : " . $luasLingkaran() . "\n";
    }
    // keliling lingkaran
    else if ($rumus == 2) {
        echo "Masukkan Jari-jari : ";
        $r = (int) trim(fgets(STDIN));

        $kelLingkaran = function () use ($r) {
            return 2 * pi() * $r;
        };

        echo "Keliling Lingkaran : " .  $kelLingkaran() . "\n";
    } else {
        echo "Input Rumus Tidak Valid !";
    }
}
// Tentukan trapesium
else if ($pilihan == 3) {
    // luas trapesium
    if ($rumus == 1) {

        echo "Sisi Sejajar 1 : ";
        $a = (int) trim(fgets(STDIN));

        echo "Sisi sejajar 2 : ";
        $b = (int) trim(fgets(STDIN));

        echo "Tinggi : ";
        $t = (int) trim(fgets(STDIN));

        $luasTrapesium = function () use ($a, $b, $t) {
            return ($a + $b) * $t / 2;
        };

        echo "Luas Trapesium : " . $luasTrapesium() . "\n";
    } else if ($rumus == 2) {

        echo "Sisi 1 : ";
        $a = (int) trim(fgets(STDIN));

        echo "Sisi 2 : ";
        $b = (int) trim(fgets(STDIN));

        echo "Sisi 3 : ";
        $c = (int) trim(fgets(STDIN));

        echo "Sisi 4 : ";
        $d = (int) trim(fgets(STDIN));

        $kelTrapesium = function () use ($a, $b, $c, $d) {
            return $a + $b + $c + $d;
        };

        echo "Keliling Trapesium : " . $kelTrapesium() . "\n";
    } else {
        echo "Input Rumus tidak Valid !";
    }
} else {
    echo "Input tidak Valid !";
}
