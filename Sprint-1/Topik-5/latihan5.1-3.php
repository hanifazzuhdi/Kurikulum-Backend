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




// function gantiArray($arr2)
// {
//     return $arr = $arr2;
// }

// gantiArray([6, 9, 12, 15, 18, 21, 24, 27]);

// echo "Array Baru = ";
// foreach ($arr as $arr2) {
//     echo "$arr2 ";
// }
