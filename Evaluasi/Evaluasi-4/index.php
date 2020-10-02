<?php
require 'control.php';

session_start();

if (!isset($_SESSION['status'])) {
    header("Location: login.php");
}

if (isset($_POST["logout"])) {
    $_SESSION = [];
    session_unset();
    session_destroy();

    header("Location: login.php");
}

// logic tampil
$santri = $conn->tampil("SELECT * FROM santri");

// logic cari   <== Belum selesai
// if (isset($_POST["cari"])) {
//     $cari = $_POST["key"];
//     $santri = $conn->cari("SELECT * FROM santri WHERE namaSantri LIKE %'$cari'%");
// }



?>

<!doctype html>
<html lang="en">

<head>
    <title>Evaluasi-4</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary sticky">
        <h5>Evaluasi-4</h5>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link ml-3" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link" href="tambah.php">Tambah Santri</a>
                </li>
            </ul>
            <form method="post" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="key" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Search</button>
                <button class="btn btn-outline-danger my-2 ml-4 my-sm-0" type="submit" name="logout">Logout</button>
            </form>
        </div>
    </nav>

    <h1 class="text-center mt-5 mb-4">Daftar Santri</h1>

    <div class="container">
        <!-- table -->
        <table class="table text-center" border="2px">
            <thead class="thead-dark">
                <th>No</th>
                <th>Nama</th>
                <th>Divisi</th>
                <th>Asal </th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>
            <?php $i = 1 ?>
            <?php foreach ($santri as $san) : ?>
                <tr>
                    <td> <?= $i ?> </td>
                    <td> <?= $san['namaSantri'] ?> </td>
                    <td> <?= $san['divisi'] ?> </td>
                    <td> <?= $san['asal'] ?> </td>
                    <td> <?= $san['status'] ?> </td>
                    <td>
                        <a href="ubah.php?id=<?= $san["id"] ?>">Edit | </a>
                        <a href="hapus.php?id=<?= $san["id"] ?>" onclick="return confirm ('Yakin Hapus?')">Hapus</a>
                    </td>
                    <?php $i++ ?>
                </tr>
            <?php endforeach ?>
        </table>


        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>