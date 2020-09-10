<?php

echo "Mau Berapa kali input : ";
$nilai = trim(fgets(STDIN));

for ($i = 1; $i <= $nilai; $i++) {
    echo "Input ke $i = ";
    $hasil_nilai[] = trim(fgets(STDIN));
}

rsort($hasil_nilai);
echo " 3 Nilai Terbesar = $hasil_nilai[0], $hasil_nilai[1], $hasil_nilai[2] \n";

sort($hasil_nilai);
echo " 3 Nilai Terkecil = $hasil_nilai[0], $hasil_nilai[1], $hasil_nilai[2] ";
