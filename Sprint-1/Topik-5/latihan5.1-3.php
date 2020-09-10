<?php

$arr = [2, 3, 4, 5, 6, 7, 8, 9];

echo "Mau Input Berapa Nilai : ";
$value = trim(fgets(STDIN));

function gantiArray($value)
{
    global $arr;

    for ($i = 1; $i <= $value; $i++) {
        echo "Nilai ke $i : ";
        $nilai[] = trim(fgets(STDIN));
    }

    $arr = $nilai;


    print_r($arr);

    foreach ($arr as $x) {
        echo $x . " ";
    }
}

$hasil = gantiArray($value);

