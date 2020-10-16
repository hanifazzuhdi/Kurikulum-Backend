<?php

session_start();

if (isset($_SESSION["status"])) {
    header("Location:" . BASEURL . "/admin");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["judul"] ?></title>

    <!-- Link -->
    <link rel="stylesheet" href="<?= $data["css"] ?>">

</head>