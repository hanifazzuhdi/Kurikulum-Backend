<?php

// sambungkan ke control.php
require 'control.php';

// instansiasi class
try {
    $conn = new connectPdo();
    // echo "Koneksi Sukses";
} catch (PDOException $e) {
    echo "error : " . $e->getMessage();
}

// logic form post
if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['namaBarang']);
    $harga = htmlspecialchars($_POST['hargaBarang']);

    if ($conn->insertData($nama, $harga) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambah!');
                document.location.href='index.php'
            </script>";
    }
}

// logic form get
if (isset($_GET['submit'])) {
    htmlspecialchars($kurir = $_GET['kurir']);
    htmlspecialchars($pengirim = $_GET['pengirim']);
    htmlspecialchars($asal = $_GET['asal']);
    htmlspecialchars($tujuan = $_GET['tujuan']);

    if ($conn->insertKurir($kurir, $pengirim, $asal, $tujuan) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambah!');
                document.location.href='index.php'
            </script>";
    }
}

// fungsi tampilkan tabel barang
$dataBarang = $conn->tampilData("barang");

// fungsi tampilkan tabel kurir
$dataKurir = $conn->tampilData("kurir");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Get dan Post</title>

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <nav>
        <div>
            <h3>Latihan Method</h3>
        </div>
        <div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#">Barang</a></li>
                <li><a href="#">Kurir</a></li>
                <button type="submit" name="logout" class="logout">Logout</button>
            </ul>
        </div>
    </nav>

    <div class="content" id="home">
        <div class="form">
            <fieldset>
                <legend>Method Post</legend>
                <form action="" method="post">
                    <label for="namaBarang">Nama Barang : </label>
                    <input type="text" name="namaBarang" id="namaBarang">

                    <label for="hargaBarang">Harga Barang : </label>
                    <input type="text" name="hargaBarang" id="hargaBarang">

                    <button type="submit" name="submit">Submit</button>
                </form>
            </fieldset>
        </div>

        <div class="form">
            <fieldset>
                <legend>Method Get</legend>
                <form action="" method="get">
                    <label for="kurir">Nama Kurir : </label>
                    <input type="text" name="kurir" id="kurir">

                    <label for="pengirim">Nama Pengirim : </label>
                    <input type="text" name="pengirim" id="pengirim">

                    <label for="asal">Asal Barang : </label>
                    <input type="text" name="asal" id="asal">

                    <label for="tujuan">Tujuan Barang : </label>
                    <input type="text" name="tujuan" id="tujuan">

                    <button type="submit" name="submit">Submit</button>
                </form>
            </fieldset>
        </div>
    </div>

    <div class="table">

        <h3>Daftar Barang</h3>
        <!-- Tabel Post -->
        <?php $i = 1 ?>
        <table class="post" border="1px" cellpadding="5" cellspacing="0">
            <thead>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga barang</th>
                <th>Aksi</th>
            </thead>
            <?php foreach ($dataBarang as $barang) : ?>
                <tr>
                    <th><?= $i ?></th>
                    <td><?= $barang['namaBarang'] ?></td>
                    <td><?= $barang['hargaBarang'] ?></td>
                    <td class="aksi">
                        <a href="ubah.php?id=<?= $barang['id'] ?>">Ubah | </a>
                        <a href="hapus.php?id=<?= $barang['id'] ?>&tabel=barang" onclick="confirm('Yakin ?')"> Hapus</a>
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach ?>
        </table>


        <!-- Tabel Get -->
        <h3>Daftar Kurir</h3>
        <?php $x = 1 ?>
        <table class="get" border="1px" cellpadding="5" cellspacing="0">
            <thead>
                <th>No</th>
                <th>Nama Kurir</th>
                <th>Alamat Pengirim</th>
                <th>Tujuan Barang</th>
                <th>Asal Barang</th>
                <th>Aksi</th>
            </thead>
            <?php foreach ($dataKurir as $kurir) : ?>
                <tr>
                    <th><?= $x ?></th>
                    <td><?= $kurir['namaKurir'] ?></td>
                    <td><?= $kurir['namaPengirim'] ?></td>
                    <td><?= $kurir['tujuanBarang'] ?></td>
                    <td><?= $kurir['asalBarang'] ?></td>
                    <td class="aksi">
                        <a href="ubah_2.php?id=<?= $kurir['id'] ?>">Ubah | </a>
                        <a href="hapus.php?id=<?= $kurir['id'] ?>&tabel=kurir" onclick="confirm('Yakin ?')"> Hapus</a>
                    </td>
                </tr>
                <?php $x++ ?>
            <?php endforeach ?>
        </table>
    </div>

</body>

</html>