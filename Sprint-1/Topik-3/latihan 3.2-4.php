<?php

echo "<h3> Latihan 4 </h3>";

$n = 9;
for ($x = 0; $x < $n; $x++) {
    for ($y = 0; $y < $n; $y++) {
        if ($x == 0 or $x == 4 or $x == 8) {
            echo "+ ";
        } else if ($x <= 3 and $y == 0) {
            echo "+ ";
        } else if ($x >= 5 and $y == 8) {
            echo "+ ";
        } else {
            echo "&nbsp- ";
        }
    }
    echo "<br>";
}
