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

        echo "Luas Persegi Panjang : " . self::$panjang * self::$lebar . "\n";
        echo "Keliling Persegi Panjang : " . 2 * (self::$panjang * self::$lebar) . "\n";
    }
}

class Lingkaran
{
    public static $r;

    public static function hitungLingkaran($r)
    {
        self::$r = $r;

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

        $luas = (self::$sejajar1 + self::$sejajar2) * self::$tinggi / 2;
        $keliling = self::$sejajar2 + self::$sisi1 + self::$sisi2 + self::$sisi3;

        echo "Luas Trapesium : $luas" . "\n";
        echo "Keliling Trapesium : $keliling" . "\n";
    }
}

persegiPanjang::hitungPersegiPanjang(5, 10);
echo "\n";
Lingkaran::hitungLingkaran(7);
echo "\n";
Trapesium::luasTrapesium(2, 3, 4);
