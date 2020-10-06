<?php

require 'App/init.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Hitung Bangun Datar</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            border-radius: 10px;
            background-color: whitesmoke;
            border: 1px solid black;
            width: 330px;
            height: 430px;
            text-align: center;
            background-color: lightgray;
        }

        .container form button {
            cursor: pointer;
            width: 80px;
            height: 30px;
            margin: 25px 10px;
            background-color: lightblue;
        }

        .container form input {
            padding: 4px;
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h3 style="margin-top:25px;">Kalkulator Hitung Bangun Datar</h3>

        <div class="content">
            <form method="post">
                <button type="submit" name="lingkaran"> Lingkaran </button>
                <button type="submit" name="segitiga"> Segitiga </button>
            </form>
        </div>

        <!-- Lingkaran -->
        <div class="content">
            <?php if (isset($_POST["lingkaran"])) : ?>
                <form method="post">
                    <p>Hitung Luas dan Keliling Lingkaran</p>
                    <label for="jari">Jari-jari : </label>
                    <input id="jari" type="text" name="jari" placeholder="Masukkan Jari-jari">
                    <button type="submit" name="subLingkaran">Submit</button>
                </form>

            <?php endif ?>

            <?php if (isset($_POST["subLingkaran"])) {
                new rumusLingkaran($_POST["jari"]);
            } ?>
        </div>

        <!-- Segitiga -->
        <div class="content">
            <?php if (isset($_POST["segitiga"])) : ?>
                <form method="post">
                    <p>Hitung Luas Segitiga</p>
                    <label for="alas">Alas : </label>
                    <input id="alas" type="text" name="alas">
                    <br>
                    <label for="tinggi">Tinggi : </label>
                    <input id="tinggi" type="text" name="tinggi">
                    <br>
                    <button type="submit" name="subSegitiga">Submit</button>
                </form>
            <?php endif ?>

            <?php if (isset($_POST["subSegitiga"])) {
                $alas = $_POST["alas"];
                $tinggi = $_POST["tinggi"];

                new rumusSegitiga($alas, $tinggi);
            } ?>
        </div>

    </div>

</body>

</html>
