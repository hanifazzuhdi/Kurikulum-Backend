<?php

session_start();

if (isset($_SESSION['test'])) {
    header("Location: index.php");
}

if (isset($_POST["submit"])) {
    $_SESSION['test'] = true;

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Session</title>

    <style>
        ul li {
            list-style: none;
        }

        ul li {
            margin-bottom: 8px;
        }

        p {
            font-style: italic;
            color: red;
        }
    </style>
</head>

<body>

    <form method="post" action="">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Masuk</button>
            </li>
        </ul>
        <p>* Isi Bebas</p>
    </form>

</body>

</html>