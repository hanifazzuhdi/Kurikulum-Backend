<?php

echo "Mau Berapa kali input : ";
$nilai = trim(fgets(STDIN));

for ($i = 1; $i <= $nilai; $i++) {
    echo "Input ke $i = ";
    $hasil_nilai[] = trim(fgets(STDIN));
}

// print_r($hasil_nilai);

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

    echo "Modus = ";
    foreach ($modus as $k => $v) {
        if ($v == max($modus)) {
            echo $k . ", ";
        }
    }

    echo "\n" . "frekuensi = " . max($modus) . "\n";

    // $hasil = array_key_first($modus);
    // $frekuensi = max($modus);

    // echo "nilai paling banyak = $hasil" . "\n" . "Frekuensi = $frekuensi" . "\n";
}

// Panggil semua fungsi
mean($hasil_nilai);
median($hasil_nilai);
modus($hasil_nilai);
