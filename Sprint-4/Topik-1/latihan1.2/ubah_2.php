<?php

require 'control.php';
$conn = new connectPdo();

// Get id 
$id = $_GET['id'];

// Ambil Data
$data = $conn->tampilData("kurir");

foreach ($data as $kurir) {
    $kurir;
}

// var_dump($data);

// Logic & Fungsi Ubah data
if (isset($_POST['submit'])) {

    if ($conn->updateKurir($_POST, $id) > 0) {

        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href='index.php'
             </script>";

        exit;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Kurir</title>

    <link rel="stylesheet" href="css/style.css">

    <style>
        .content {
            border: 0;
        }
    </style>
</head>

<body>

    <div class="content">
        <div class="form">
            <fieldset>
                <legend>Ubah Data</legend>
                <form action="" method="post">

                    <label for="kurir">Nama Kurir : </label>
                    <input type="text" name="kurir" id="kurir" value="<?= $kurir['namaKurir'] ?>">

                    <label for="pengirim">Nama Pengirim : </label>
                    <input type="text" name="pengirim" id="pengirim" value=" <?= $kurir['namaPengirim'] ?>">

                    <label for="asal">Asal Barang : </label>
                    <input type="text" name="asal" id="asal" value=" <?= $kurir['asalBarang'] ?>">

                    <label for="tujuan">Tujuan Barang : </label>
                    <input type="text" name="tujuan" id="tujuan" value=" <?= $kurir['tujuanBarang'] ?>">

                    <button type="submit" name="submit">Ubah</button>
                </form>
            </fieldset>
        </div>
    </div>

</body>

</html>