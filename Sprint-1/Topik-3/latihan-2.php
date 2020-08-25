<?php 

$n = 9;
for ($i = 1; $i < $n; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . ' ';
}
