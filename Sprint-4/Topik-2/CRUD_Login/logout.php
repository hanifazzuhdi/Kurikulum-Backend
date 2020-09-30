<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time() - 120);
setcookie('key', '', time() - 120);

header("Location: login.php");
