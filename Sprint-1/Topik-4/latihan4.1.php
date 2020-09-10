<?php

echo "Mau Berapa kali input : ";
$nilai = trim(fgets(STDIN));

for ($i = 1; $i <= $nilai; $i++) {
    echo "Input ke $i = ";
    $hasil_nilai[] = trim(fgets(STDIN));
}

// fungsi urut
sort($hasil_nilai);

// fungsi mean 
function mean($nilai)
{
    echo "Mean = " . array_sum($nilai) / count($nilai) . "\n";
}

// fungsi median
function median($nilai)
{

    if (count($nilai) % 2 == 1) {
        $median = (count($nilai) + 1) / 2;

        echo "Median = " . $nilai[$median - 1] . "\n";
    } else if (count($nilai) % 2 == 0) {
        $median1 = (count($nilai) / 2);
        $median2 = (count($nilai) / 2)  + 1;

        $hasil = "Median = " . (($nilai[$median1 - 1]) + ($nilai[$median2 - 1])) / 2 . "\n";

        echo $hasil . "\n";
    }
}

function modus($nilai)
{
    $modus = array_count_values($nilai);
    arsort($modus);


    print_r($modus);
}


// 5, 9, 6, 7, 9, 8, 10, 7, 8
mean($hasil_nilai);
median($hasil_nilai);
echo "Modus : " . modus($hasil_nilai);

// Latihan 2

rsort($hasil_nilai);
echo " 3 Nilai Terbesar = $hasil_nilai[0], $hasil_nilai[1], $hasil_nilai[2] \n";

sort($hasil_nilai);
echo " 3 Nilai Terkecil = $hasil_nilai[0], $hasil_nilai[1], $hasil_nilai[2] ";
