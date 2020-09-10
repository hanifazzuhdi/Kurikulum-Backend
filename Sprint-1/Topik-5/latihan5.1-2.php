<?php

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
        function luasSegitiga(int $width, int $lenght)
        {
            return ($width * $lenght) / 2;
        }

        echo "Masukkan Alas : ";
        $a = (int) trim(fgets(STDIN));
        echo "Masukkan Tinggi : ";
        $p = (int) trim(fgets(STDIN));

        $hasil = luasSegitiga($a,  $p);
        echo "Luas Segitiga : " . $hasil . "\n";
    }
    // Keliling Segitiga
    else if ($rumus == 2) {
        function kelSegitiga($sisi1, $sisi2, $sisi3)
        {
            return $sisi1 + $sisi2 + $sisi3;
        }

        echo "Masukkan Sisi 1 : ";
        $sisi1 = (int) trim(fgets(STDIN));
        echo "Masukkan Sisi 2 : ";
        $sisi2 = (int) trim(fgets(STDIN));
        echo "Masukkan Sisi 3 : ";
        $sisi3 = (int) trim(fgets(STDIN));

        $hasil = kelSegitiga($sisi1, $sisi2, $sisi3);
        echo "Keliling Segitiga : " . $hasil . "\n";
    } else {
        echo "Input Rumus Tidak Valid !";
    }
}
// Tentukan ingkaran 
else if ($pilihan == 2) {
    // Luas Lingkaran
    if ($rumus == 1) {
        function luasLingkaran(int $r)
        {
            return pi() * $r * $r;
        }

        echo "Masukkan Jari-jari : ";
        $r = (int) trim(fgets(STDIN));

        $hasil = luasLingkaran($r);
        echo "Luas Lingkaran : " . $hasil . "\n";
    }
    // keliling lingkaran
    else if ($rumus == 2) {
        function kelLingkaran(int $r)
        {
            return 2 * pi() * $r;
        }

        echo "Masukkan Jari-jari : ";
        $r = (int) trim(fgets(STDIN));

        $hasil = kelLingkaran($r);
        echo "Keliling Lingkaran : " . $hasil . "\n";
    } else {
        echo "Input Rumus Tidak Valid !";
    }
}
// Tentukan trapesium
else if ($pilihan == 3) {
    // luas trapesium
    if ($rumus == 1) {
        function luasTrapesium($a, $b, $t)
        {
            return ($a + $b) * $t / 2;
        }

        echo "Sisi Sejajar 1 : ";
        $a = (int) trim(fgets(STDIN));

        echo "Sisi sejajar 2 : ";
        $b = (int) trim(fgets(STDIN));

        echo "Tinggi : ";
        $t = (int) trim(fgets(STDIN));

        $hasil = luasTrapesium($a, $b, $t);
        echo "Luas Trapesium : " . $hasil . "\n";
    } else if ($rumus == 2) {
        function kelTrapesium($a, $b, $c, $d)
        {
            return $a + $b + $c + $d;
        }

        echo "Sisi 1 : ";
        $a = (int) trim(fgets(STDIN));

        echo "Sisi 2 : ";
        $b = (int) trim(fgets(STDIN));

        echo "Sisi 3 : ";
        $c = (int) trim(fgets(STDIN));

        echo "Sisi 4 : ";
        $d = (int) trim(fgets(STDIN));

        $hasil = kelTrapesium($a, $b, $c, $d);
        echo "Keliling Trapesium : " . $hasil . "\n";
    } else {
        echo "Input Rumus tidak Valid !";
    }
} else {
    echo "Input tidak Valid !";
}
