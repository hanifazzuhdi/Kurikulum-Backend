<?php

// cek apabila tidak ada cookie
if (!isset(($_COOKIE['test']))) {
    header("Location: login.php");
}

// Hapus cookie via logout
if (isset($_POST['logout'])) {

    setcookie('test', '', time() - 3600);

    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Cookie</title>
</head>

<body>

    <h1>Hello World</h1>

    <h3>Latihan Topik-2 Cookie</h3>

    <form action="" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>



</body>

</html>