<?php

echo "<h3> Latihan 1 </h3>";

$n = 9;
for ($x = 1; $x <= $n; $x++) {
    for ($y = 1; $y <= $x; $y++) {
        echo "+ ";
    }
    for ($k = $n; $k >= $y; $k--) {
        echo "&nbsp- ";
    }
    echo "<br>";
}
