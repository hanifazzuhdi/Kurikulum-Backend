<?php

echo "<h3> Latihan 3 </h3>";

$n = 9;
for ($k = 0; $k < $n; $k++) {
    for ($c = 0; $c < $n; $c++) {
        if (($k + $c) <= 8 and $k <= $c) {
            echo "+ ";
        } else if (($k + $c) <= 16 and ($k + $c) > 7 and $k >= $c) {
            echo "+ ";
        } else {
            echo "&nbsp- ";
        }
    }
    echo "<br>";
}
