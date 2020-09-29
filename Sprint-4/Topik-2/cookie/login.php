<?php

// Cek apakah ada cookie
if ($_COOKIE) {
    header("Location: index.php");
}

// Set Cookie
if (isset($_POST['submit'])) {
    setcookie("test", "testingcookie", time() + 3600);

    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cookie</title>

    <style>
        ul {
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

    <form action="" method="post">

        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" required name="username" id="username">
            </li>
            <li>
                <label for="pass">Password : </label>
                <input type="password" required name="pass" id="pass">

            </li>
            <li>
                <button type="submit" name="submit">Masuk</button>
            </li>
        </ul>

        <p>* Isi Bebas</p>

    </form>

</body>

</html>