<?php

$santri = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ],
];

// buat fungsi urut id
function urutId($a, $b)
{
    return $a['id'] > $b['id'];
}

// buat fungsi urut nama
function urutNama($a, $b)
{
    return $a['name'] > $b['name'];
}

// fungsi urut umur
function urutUmur($a, $b)
{
    return $a['age'] > $b['age'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 4.2</title>
</head>

<body>

    <h3> a. Daftar Urut Santri Berdasarkan ID Terkecil.</h3>
    <?php

    usort($santri, 'urutId');

    foreach ($santri as $a) : ?>
        <ul>
            <li><?= $a['id'] ?></li>
            <li><?= $a['name'] ?></li>
            <li><?= $a['division'] ?></li>
            <li><?= $a['age'] ?></li>
        </ul>
    <?php endforeach ?>

    <h3> b. Daftar Urut Santri Berdasarkan Nama Terkecil.</h3>
    <?php

    usort($santri, 'urutNama');

    foreach ($santri as $b) : ?>
        <ul>
            <li><?= $b['id'] ?></li>
            <li><?= $b['name'] ?></li>
            <li><?= $b['division'] ?></li>
            <li><?= $b['age'] ?></li>
        </ul>
    <?php endforeach ?>

    <h3> c. Santri Dengan Minat Backend </h3>
    <?php foreach ($santri as $c) : ?>
        <?php if ($c['division'] == "PHP Backend") : ?>
            <ul>
                <li><?= $c['id'] ?></li>
                <li><?= $c['name'] ?></li>
                <li><?= $c['division'] ?></li>
                <li><?= $c['age'] ?></li>
            </ul>
        <?php endif ?>
    <?php endforeach ?>


    <h3>d. Jumlah Santri Umur Kurang dari 25</h3>
    <?php
    $getUmur = [];

    foreach ($santri as $d) {
        if ($d['age'] < 25) {
            $getUmur[] = $d['name'];
        }
    }

    echo "Jumlah : " . count($getUmur);
    ?>

    <h3>e. Rata-rata Umur Santri</h3>
    <?php
    $getRata = [];

    foreach ($santri as $e) {
        $getRata[] = $e['age'];
    }

    $hasil = array_sum($getRata) / count($getRata);

    echo "Rata-rata : " . $hasil;
    ?>

    <h3>f. Santri Paling Muda</h3>
    <?php
    usort($santri, 'urutUmur');

    $getUmur = [];

    foreach ($santri as $f) {
        $getUmur[] = $f['name'];
    }

    echo $getUmur[0];
    ?>

    </table>

</body>

</html>