<?php

session_start();

if (!isset($_SESSION["status"])) {
    header("Location:" . BASEURL . "/login");
    exit;
}

if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    $_SESSION = [];

    header("Location:" . BASEURL . "/login");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data["judul"] ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $data["css"] ?>">
</head>

<body>

    <!-- NAV -->
    <nav>
        <h1>Welcome Admin</h1>
        <ul>
            <a href="<?= BASEURL . '/admin' ?>">
                <li>Home</li>
            </a>
            <a target="_blank" href="<?= BASEURL . '/home' ?>">
                <li>Lihat Website</li>
            </a>
        </ul>

        <div class="form">
            <form method="post">
                <button type="submit" name="logout"> Logout </button>
            </form>
        </div>
    </nav>