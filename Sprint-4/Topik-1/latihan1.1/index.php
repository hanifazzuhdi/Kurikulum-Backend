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
    $nama = $_POST['namaBarang'];
    $harga = $_POST['hargaBarang'];

    if ($conn->insertData($nama, $harga) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambah!');
                document.location.href='index.php'
            </script>";
    }
}

// logic form get
if (isset($_GET['submit'])) {
    $kurir = $_GET['kurir'];
    $pengirim = $_GET['pengirim'];
    $asal = $_GET['asal'];
    $tujuan = $_GET['tujuan'];

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

    <style>
        * {
            margin: 0;
        }

        body {
            font-family: cursive
        }

        /* NAV */
        nav {
            position: fixed;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: whitesmoke;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            height: 50px;
            top: 0;
            left: 0;
            right: 0;
        }

        nav h3 {
            margin-left: 20px;
        }

        nav a {
            text-decoration: none;
            color: black;
            transition: 0.1s;
        }

        nav a:hover {
            color: grey;
        }

        nav ul {
            margin-right: 20px;
        }

        nav ul li {
            display: inline;
            list-style: none;
            margin-right: 10px;
        }

        /* FORM */
        .content {
            /* background: rgb(238, 174, 202);
            background: linear-gradient(342deg, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%); */
            display: flex;
            justify-content: space-around;
            border-bottom: 2px solid black;
            padding: 20px;
            margin-top: 50px;
        }

        .content .form {
            margin-top: 10px;
            padding: 30px;
        }

        .content .form fieldset {
            padding: 20px 65px 50px 65px;
        }

        .content .form fieldset legend {
            font-weight: bolder;
            font-size: 1.3em;
        }

        .content .form input {
            width: 250px;
            height: 20px;
            margin-top: 5px;
        }

        .content .form button {
            margin-top: 10px;
            cursor: pointer;
        }

        .content .form label {
            display: inline-block;
            margin-top: 8px;
        }

        .content .form button {
            background-color: #005af5;
            color: white;
            border-radius: 4px;
            width: 85px;
            height: 35px;
            transition: 0.1s;
        }

        .content .form button:hover {
            background-color: lightblue;
            color: black;
        }

        /* TABEL */

        .table table {
            margin: 0 auto 100px;

        }

        .table h3 {
            text-align: center;
            margin: 30px 0;
        }

        .table .post {
            width: 500px;
        }

        .table thead {
            background-color: lightblue;
        }
    </style>


</head>

<body>

    <nav>
        <div>
            <h3>Latihan Method</h3>
        </div>
        <div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Barang</a></li>
                <li><a href="#">Kurir</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="content">

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
            </thead>
            <?php foreach ($dataBarang as $barang) : ?>
                <tbody>
                    <tr>
                        <th><?= $i ?></th>
                        <td><?= $barang['namaBarang'] ?></td>
                        <td><?= $barang['hargaBarang'] ?></td>
                    </tr>
                </tbody>
                <?php $i++ ?>
            <?php endforeach ?>
        </table>


        <!-- Tabel Get -->
        <h3>Daftar Kurir</h3>
        <?php $x = 1 ?>
        <table border="1px" cellpadding="5" cellspacing="0">
            <thead>
                <th>No</th>
                <th>Nama Kurir</th>
                <th>Alamat Pengirim</th>
                <th>Tujuan Barang</th>
                <th>Asal Barang</th>
            </thead>
            <?php foreach ($dataKurir as $kurir) : ?>
                <tr>
                    <th><?= $x ?></th>
                    <td><?= $kurir['namaKurir'] ?></td>
                    <td><?= $kurir['namaPengirim'] ?></td>
                    <td><?= $kurir['tujuanBarang'] ?></td>
                    <td><?= $kurir['asalBarang'] ?></td>
                </tr>
                <?php $x++ ?>
            <?php endforeach ?>
        </table>
    </div>

</body>

</html>