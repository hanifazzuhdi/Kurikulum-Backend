<?php

require 'control.php';
$conn = new connectPdo();

// Get id
$id = $_GET['id'];

// Panggil Fungsi
$data = $conn->tampilData("barang");

// Looping Array multidimensi
foreach ($data as $barang) {
    $barang;
}
// var_dump($data);

if (isset($_POST['submit'])) {

    if ($conn->update($_POST, $id)) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href='index.php'
             </script>";

        exit;
    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>

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

                    <label for="namaBarang">Nama Barang : </label>
                    <input type="text" name="namaBarang" id="namaBarang" value="<?= $barang['namaBarang'] ?>">

                    <label for="hargaBarang">Harga Barang : </label>
                    <input type="text" name="hargaBarang" id="hargaBarang" value="<?= $barang['hargaBarang'] ?>">

                    <button type="submit" name="submit">Ubah!</button>
                </form>
            </fieldset>
        </div>
    </div>

</body>

</html>