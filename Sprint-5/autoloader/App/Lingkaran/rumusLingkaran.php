<?php

class rumusLingkaran
{
    public function __construct($r = 0)
    {
        $luas = pi() * $r * $r;
        $keliling = 2 * pi() * $r;

        echo "Luas Lingkaran = " . $luas;
        echo "<br>";
        echo "Keliling Lingkaran = " . $keliling;
    }
}
