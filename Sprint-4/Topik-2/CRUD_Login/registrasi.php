<?php
require 'control.php';

$conn = new Users();

if (isset($_POST['submit'])) {
    if (empty($_POST['email'] and $_POST['password'])) {
        echo "<script>
                alert ('Field TIDAK BOLEH KOSONG !');
                document.location.href='registrasi.php'
            </script>";
    } else {
        if ($conn->registrasi($_POST) > 0) {
            echo "<script>
                alert ('Akun Berhasil Dibuat');
                document.location.href='login.php'
            </script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pegawai - Budi Market</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/regis.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container">
        <h2>Registrasi Admin</h2>

        <form action="" method="post">
            <div class="content">
                <input type="email" required="required" name="email">
                <span>Email</span>
            </div>
            <div class=" content">
                <input type="password" required="required" name="password">
                <span>Password</span>
            </div>

            <div class="content">
                <input type="password" required="required" name="confirm" id="confirm">
                <span>Konfirmasi Password</span>
            </div>

            <div class="content">
                <button type="submit" name="submit">Daftar</button>
            </div>
        </form>

        <a href="login.php">Kembali ke halaman Login</a>

    </div>

</body>

</html>