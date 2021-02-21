<?php

$sum = 0;
$i = 1;

while ($i <= 100) {
    $sum += $i;
    if ($sum > 1000) {
        break;
    }
    $i++;
}

print $i;