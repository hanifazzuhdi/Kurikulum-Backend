<?php

echo "<h3> Latihan 2 </h3>";

$n = 9;
for ($i = 1; $i <= $n; $i++) {
    for ($j = $n; $j > $i; $j--) {
        echo "&nbsp- ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "+ ";
    }
    echo "<br>";
}
