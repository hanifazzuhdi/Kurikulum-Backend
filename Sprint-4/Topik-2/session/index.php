<?php

session_start();

if (!isset($_SESSION['test'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $_SESSION = [];
    session_destroy();
    session_unset();

    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Session</title>
</head>

<body>

    <h1>Hello World</h1>

    <form action="" method="post">
        <button type="submit" name="submit">Logout</button>
    </form>

</body>

</html>