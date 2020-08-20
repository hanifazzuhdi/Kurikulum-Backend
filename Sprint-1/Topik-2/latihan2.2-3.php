<?php

// buat variabel 
$c = 34;

// Rumus
$konversi_reamur = 4 / 5;
$konversi_farenheit = 9 / 5;
$konversi_kelvin = 273;

//  Buat konversi 

$hasil_reamur = $konversi_reamur * $c;
$hasil_farenheit = $konversi_farenheit * $c + 32;
$hasil_kelvin = $konversi_kelvin + $c;

echo "Suhu dalam satuan celcius = $c";
echo "<br>";
echo ("Suhu dalam satuan reamur = $hasil_reamur");
echo "<br>";
echo ("Suhu dalam satuan farenheit = $hasil_farenheit");
echo "<br>";
echo ("Suhu dalam satuan kelvin = $hasil_kelvin");
