<?php

// Latihan 

class persegiPanjang
{
    public static $panjang,
        $lebar;

    public static function hitungPersegiPanjang($panjang, $lebar)
    {
        self::$panjang = $panjang;
        self::$lebar = $lebar;

        if (self::$panjang <= 0 or self::$lebar <= 0) {
            throw new Exception("Oops, Inputan Parameter Harus Diatas 0", 1);
        }

        $luas = self::$panjang * self::$lebar;
        $keliling = 2 * (self::$panjang * self::$lebar);

        echo "Luas Persegi Panjang : " . $luas . "\n";
        echo "Keliling Persegi Panjang : " . $keliling . "\n";
    }
}

class Lingkaran
{
    public static $r;

    public static function hitungLingkaran($r)
    {
        self::$r = $r;

        if (self::$r <= 0) {
            throw new Exception("Oops, Inputan Parameter Harus Diatas 0", 1);
        }

        $luas = pi() * self::$r * self::$r;
        $keliling = pi() * 2 * self::$r;

        echo "Luas Lingkaran : $luas" . "\n";
        echo "keliling Lingkaran : $keliling" . "\n";
    }
}

class Trapesium
{
    public static $sejajar1,
        $sejajar2,
        $tinggi,
        $sisi1 = 10,
        $sisi2 = 5,
        $sisi3 = 7;

    public static function luasTrapesium($a, $b, $t)
    {
        self::$sejajar1 = $a;
        self::$sejajar2 = $b;
        self::$tinggi = $t;

        if (self::$sejajar1 <= 0 or self::$sejajar2 <= 0 or self::$tinggi <= 0) {
            throw new Exception("Oops, Inputan Parameter Harus Diatas 0", 1);
        }

        $luas = (self::$sejajar1 + self::$sejajar2) * self::$tinggi / 2;
        $keliling = self::$sejajar2 + self::$sisi1 + self::$sisi2 + self::$sisi3;

        echo "Luas Trapesium : $luas" . "\n";
        echo "Keliling Trapesium : $keliling" . "\n";
    }
}

// Persegi Panjang
try {
    persegiPanjang::hitungPersegiPanjang(10, -2);
} catch (Exception $error) {
    echo $error->getMessage();
}

echo "\n";

// Lingkaran
try {

    Lingkaran::hitungLingkaran(-1);
} catch (Exception $error) {
    echo $error->getMessage();
}

echo "\n";

// Trapesium
try {
    Trapesium::luasTrapesium(2, -2, 4);
} catch (Exception $error) {
    echo $error->getMessage();
}

echo "\n";
