<?php

function lingkaran($class)
{
    $file = "App/Lingkaran/" . $class . ".php";
    if (is_readable($file)) {
        require $file;
    }
}

function segitiga($class)
{
    $file = "App/Segitiga/" . $class . ".php";
    if (is_readable($file)) {
        require $file;
    }
}

spl_autoload_register("lingkaran");
spl_autoload_register("segitiga");

 ?>
