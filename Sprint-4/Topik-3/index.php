<?php
require 'controller/control.php';

$artikel = $conn->tampil("SELECT * FROM artikel");

// LOGIC CARI
if (isset($_POST['cari'])) {
    $key = $_POST['keyword'];

    $artikel = $conn->cari($key);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Coba aja</title>

    <!-- FONT + ICON -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;800&display=swap" rel="stylesheet">

    <!-- MY CSS -->
    <!-- <link rel="stylesheet" href="css/user.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            list-style: none;
            text-decoration: none;
            color: black;
        }

        body {
            background-color: #F5F5F5;
        }

        /* navbar */
        header {
            display: inline;
        }

        .jumbotron {
            padding: 70px;
            background-color: #B0BEC5;
            text-align: center;
        }

        .jumbotron h1 {
            color: black;
            padding-bottom: 20px;
        }

        .jumbotron p {
            color: black;
            font-size: 16px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #455A64;
            position: sticky;
            z-index: 999;
            top: 0;
            height: 50px;
            color: white;
        }

        nav h3 a {
            margin-left: 40px;
            color: white;
        }

        nav li {
            display: inline;
            list-style-type: none;
            margin-right: 30px;
        }

        nav li a {
            color: white;
            transition: 0.3s;
        }

        nav li a:hover {
            color: black;
        }

        nav li:last-child {
            margin-right: 40px;
        }

        /* content */

        main {
            display: grid;
            grid-template-columns: 75% auto;
            margin-top: 10px;
            padding: 30px 10px;
        }

        .content:nth-child(1) {
            position: relative;
            padding: 40px 0 80px;
            box-shadow: -1px 0px 2px rgba(0, 0, 0, 0.3);
        }

        .content .pembuka {
            margin-bottom: 50px;
            padding: 20px;
        }

        .content .pembuka h1 {
            text-align: center;
            margin: 20px 0 35px;
        }

        .content .pembuka p {
            font-size: 16px;
            text-align: justify;
        }

        /* CONTENT 1 (SISI KIRI) */
        .content .artikel {
            position: relative;
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .content .card {
            position: relative;
            width: 250px;
            height: 310px;
            margin: 20px 0px;
            border-radius: 5px;
            background-color: whitesmoke;
            box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.6);
            transition: 0.3s;
        }

        .content .card:hover {
            background-color: #EEEEEE;
            transform: translateY(-8px);
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.6);
        }

        .content .card .gambar {
            /* border: 1px solid black; */
            border-bottom: 2px solid black;
        }

        .content .card h3 {
            margin-top: 5px;
            padding: 5px;
            font-weight: 400;
        }

        .content .card p {
            margin-top: 2px;
            padding: 5px;
            font-size: 13px;
            font-weight: 300;
        }

        /* CONTENT 2 (SIDE PAGE) */

        .content:nth-child(2) {
            position: relative;
            padding: 40px 20px;
            background-color: #fff;
            box-shadow: -1px 0px 3px rgba(0, 0, 0, 0.3);
        }

        .kanan form input {
            padding: 5px;
            width: 200px;
            border-radius: 4px;
            border: 1px solid black;
        }

        .kanan form button {
            width: 60px;
            height: 30px;
            background-color: #2196F3;
            border-radius: 4px;
            border: 1px solid #2196F3;
            cursor: pointer;
        }

        .kanan form button:hover {
            background-color: lightblue;
        }

        .kanan h3 {
            margin-top: 50px;
            margin-bottom: 20px;
            font-weight: 500;
            text-align: center;
        }

        .kanan ul li {
            /* background-color: #E3F2FD; */
            border-bottom: 3px solid rgba(0, 0, 0, 0.3);
            padding: 3px;
        }

        footer {
            background-color: #455A64;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer p {
            color: white;
            font-size: 15px;
        }

        footer span {
            color: salmon;
        }
    </style>
</head>

<body>

    <header>
        <div class="jumbotron">
            <h1>WELCOME TO MY BLOG</h1>
            <p>Belajar Programming Dimanapun dan Kapanpun. Happy Learning </p>
        </div>
        <nav>
            <h3><a href="index.php">Koding-Z</a></h3>
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="https://stackoverflow.com/" target="_blank">Forum</a></li>
                <li><a href="https://github.com/hanifazzuhdi" target="_blank"> About Me </a></li>
                <!-- <img src="img/login.svg" width="20px"> -->
            </ul>
        </nav>
    </header>

    <!-- MAIN -->
    <main>

        <div class=" content kiri">
            <section class="pembuka">
                <h1>Selamat Datang Di Koding-Z</h1>
                <p>Koding-Z didedikasikan bagi anda yang ingin mempelejari pemrograman khususnya di bidang Web Developer. Saat ini Koding-Z telah memiliki 1000+ tutorial pemrograman dan akan selalu update materi setiap minggunya, Selamat Belajar.
                </p>
            </section>

            <div class="artikel">
                <!-- CARD -->
                <?php foreach ($artikel as $art) : ?>
                    <div class="card">
                        <section class="gambar">
                            <img src="<?= $art["gambar"] ?>" width="250" height="130" alt="user">
                        </section>
                        <h3><a href="artikel.php?id=<?= $art['id'] ?>&tag=<?= $art["tag"] ?>"> <?= $art['judul'] ?> </a></h3>
                        <p><?= substr($art['isiArtikel'], 0, 100) . " ..." ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="content kanan">
            <form method="post">
                <input type="text" name="keyword" placeholder="Cari Materi ..." autofocus>
                <button type="submit" name="cari">Cari</button>
            </form>

            <h3>Kategori </h3>
            <ul>
                <li><a href="kategori.php?id=1">HTML</a> </li>
                <li><a href="kategori.php?id=2">CSS</a></li>
                <li><a href="kategori.php?id=3">PHP</a></li>
                <li><a href="kategori.php?id=4">JavaScript</a></li>
            </ul>

        </div>
    </main>

    <footer>
        <p>Build With <span> Love </span> By <span>Hanif</span> <sup>&copy;</sup> 2019 - <?= date("Y") ?> </p>
    </footer>

</body>

</html>