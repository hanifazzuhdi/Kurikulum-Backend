<?php
if (!isset($_SESSION['login'])) {

    header("Location: login.php");
}

require 'control.php';

$conn = new connectPdo();
$hapus = [$_GET['id'], $_GET['tabel']];

// var_dump($hapus);

if ($conn->hapus($hapus[0], $hapus[1]) > 0) {
    header("Location: index.php");

    exit;
}
