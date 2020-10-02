<?php
require 'control.php';

session_start();
if (!isset($_SESSION['status'])) {
    header("Location: login.php");
}

$id = $_GET["id"];

if ($conn->delete($id) > 0) {
    echo "<script>
                alert('Data Berhasil Dihapus');
                document.location.href='index.php'
        </script>";
    exit;
} else {
    echo "<script>
                alert('Data Gagal Dihapus');
                document.location.href='index.php'
            </script>";
}
