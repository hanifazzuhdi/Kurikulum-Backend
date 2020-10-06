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

$id = $_GET['id'];

// get santri
$santri = $conn->tampil("SELECT * FROM santri WHERE id = $id");

// logic ubah
if (isset($_POST['submit'])) {
    if ($conn->update($_POST, $id) > 0) {
        echo "<script>
               alert('Data Berhasil Diubah');
                document.location.href='index.php'
            </script>";
        exit;
    } else {
        echo "<script>
               alert('Data Gagal Diubah');
                document.location.href='index.php'
            </script>";
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <title>Ubah Data</title>
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
                <li class="nav-item">
                    <a class="nav-link ml-3" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link" href="tambah.php">Tambah Santri</a>
                </li>
            </ul>
            <form method="post" class="form-inline my-2 my-lg-0">

                <button class="btn btn-outline-danger my-2 ml-4 my-sm-0" type="submit" name="logout">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container">

        <h2 class="text-center mt-5 mb-5">Ubah Data Santri</h2>

        <?php foreach ($santri as $san) : ?>
            <form method="post">
                <label for="">Nama Santri : </label>
                <input type="text" value="<?= $san["namaSantri"] ?>" name="nama" id="">

                <label for="">Divisi : </label>
                <input type="text" value="<?= $san["divisi"] ?>" name="divisi" id="">

                <label for="">Asal : </label>
                <input type="text" value="<?= $san["asal"] ?>" name="asal" id="">

                <label for="">status : </label>
                <input type="text" value="<?= $san["status"] ?>" name="status" id="">
            <?php endforeach ?>
            <button type="submit" name="submit">Tambah</button>
            </form>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>