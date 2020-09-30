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

    <style>
        body {
            background-image: linear-gradient(to right bottom, #051937, #222e48, #3c4559, #565d6a, #73767b);
            height: 100vh;
            overflow: hidden;
            font-family: Arial, Helvetica, sans-serif;
        }

        .content {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .content .form {
            margin-top: 80px;
            padding: 30px;
        }

        .content .form fieldset {
            border-radius: 10px;
            border: 2px solid black;
            padding: 20px 65px 50px 65px;
            background-color: whitesmoke;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.5);
        }

        .content .form fieldset legend {
            font-weight: bolder;
            font-size: 1.4em;
        }

        .content .form input,
        label {
            width: 250px;
            padding: 2px;
            margin-top: 4px;
            display: block;
        }

        .content .form button {
            margin-top: 15px;
            cursor: pointer;
            background-color: #2686e0;
            color: white;
            border: 1px solid black;
            outline: none;
            border-radius: 4px;
            width: 85px;
            height: 35px;
            transition: 0.150s;
        }

        .content .form button:hover {
            background-color: lightblue;
            color: black;
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

                    <button type="submit" name="submit">Ubah</button>
                </form>
            </fieldset>
        </div>
    </div>

</body>

</html>