<?php
session_start();
require 'control.php';
$conn = new Users();

// SET COOKIE
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {

    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = $conn->get_data($id);

    if ($key === hash('sha256', $result[0]['email'])) {
        $_SESSION['login'] = true;
    }
}

// CEK SESSION
if (isset($_SESSION['login'])) {

    header("Location: index.php");
}

// LOGIC LOGIN
if (isset($_POST['submit'])) {

    if (empty($_POST['email'] and $_POST['password'])) {
        echo "<script>
                alert ('Field TIDAK BOLEH KOSONG !');
                document.location.href='login.php'
           </script>";
    } else {

        $conn->login($_POST);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Budi Market</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/login.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h2>Budi Market</h2>

        <form action="" method="post">
            <div class="content">
                <input type="email" required="required" name="email">
                <span>Email</span>
            </div>
            <div class=" content">
                <input type="password" required="required" name="password">
                <span>Password</span>
            </div>

            <input type="checkbox" name="check">
            <label for="">Remember Me</label>

            <div class="content">
                <button type="submit" name="submit">Masuk</button>
            </div>
        </form>

        <a href="registrasi.php">Daftar Pegawai Baru ?</a>

    </div>

</body>

</html>