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

// print_r($hasil_input);

function pisahAngka($hasil_input)
{

    $pecah = implode("", $hasil_input);

    $hasil = explode("0", $pecah);

    // print_r($hasil);

    foreach ($hasil as $k => $v) {
        $split[] = str_split($v);
        sort($split[$k]);
    }

    $result = array_merge($split[0], $split[1]);

    return $result;
}

$hasil = pisahAngka($hasil_input);

print_r($hasil);

// Soal 3

echo "Mau Input berapa murid ? ";
$jumlah = trim(fgets(STDIN));

for ($i = 1; $i <= $jumlah; $i++) {
    echo "Data ke $i : " . "\n";
    echo "Nama Murid : ";
    $data['nama'] = trim(fgets(STDIN));
    echo "NIK : ";
    $data['nik'] = trim(fgets(STDIN));
    echo "Jurusan : ";
    $data['jurusan'] = trim(fgets(STDIN));
    echo "Divisi : ";
    $data['divisi'] = trim(fgets(STDIN));
    echo "Usia : ";
    $data['usia'] = trim(fgets(STDIN));

    // $hasil = [
    //     "nama" => $nama,
    //     "nik" => $nik,
    //     "jurusan" => $jurusan,
    //     "divisi" => $divisi,
    //     "usia" => $usia
    // ];

    $students[] = $data;
}



// print_r($students);

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
    var_dump($a);
    var_dump($b);
    return $a["usia"] > $b["usia"];
}

usort($students, "urutUmur");

foreach ($students as $c) {
    $getNama[] = $c['nama'];
}

echo "Santri paling muda = " . $getNama[0] . "\n";
