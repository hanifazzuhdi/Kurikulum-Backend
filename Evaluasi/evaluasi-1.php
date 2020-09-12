<?php

// Soal 1

for ($x = 1; $x <= 9; $x++) {
    for ($y = 1; $y <= 9; $y++) {
        if ($y % 2 == 1) {
            echo " + ";
        } else {
            echo "- ";
        }
    }
    echo "\n";
}

echo "\n";

for ($x = 1; $x <= 9; $x++) {
    for ($y = 1; $y <= 10; $y++) {
        if ($x % 2 == 1) {
            echo "- ";
        } else {
            echo "+ ";
        }
    }
    echo "\n";
}


// Soal 2
echo "Mau input Berapa ? ";
$jumlah = trim(fgets(STDIN));

for ($i = 1; $i <= $jumlah; $i++) {
    echo "Masukkan Angka ke $i : ";
    $hasil_input[] = trim(fgets(STDIN));
}

function pisahAngka($hasil_input)
{


    foreach ($hasil_input as $x) {
        if ($x == 0) {
            asort($hasil_input);
            array_shift($hasil_input);
        }
    }

    return $hasil_input;
    // print_r($hasil_input);
}
// array_filter($hasil_input, "pisahAngka");
$hasil = pisahAngka($hasil_input);

print_r($hasil);

// Soal 3

echo "Mau Input berapa murid ? ";
$jumlah = trim(fgets(STDIN));

for ($i = 1; $i <= $jumlah; $i++) {
    echo "Data ke $i : " . "\n";
    echo "Nama Murid : ";
    $nama = trim(fgets(STDIN));
    echo "NIK : ";
    $nik = trim(fgets(STDIN));
    echo "Jurusan : ";
    $jurusan = trim(fgets(STDIN));
    echo "Divisi : ";
    $divisi = trim(fgets(STDIN));
    echo "Usia : ";
    $usia = trim(fgets(STDIN));

    $hasil = [
        "nama" => $nama,
        "nik" => $nik,
        "jurusan" => $jurusan,
        "divisi" => $divisi,
        "usia" => $usia
    ];

    $students[] =  $hasil;
}

print_r($students);

echo "Santri dengan minat Backend : " . "\n";

foreach ($students as $x) {
    if ($x["divisi"] == "Backend") {
        echo $x["nama"] . "\n";
    }
}

foreach ($students as $y) {

    if ($y["usia"] < 25) {
        $getUmur[] = $y['nama'];
    }
}

echo "Santri umur kurang dari 25 = " . count($getUmur) . "\n";

function urutUmur($a, $b)
{
    return $a["usia"] > $b["usia"];
}

usort($students, "urutUmur");

foreach ($students as $c) {
    $getNama[] = $c['nama'];
}

echo "Santri paling muda = " . $getNama[0] . "\n";
