<?php
declare(strict_types=1);

function product(int ...$args): int
{
    $product = 1;
    foreach ($args as $arg) {
        $product *= $arg;
    }

    return $product;
}

print product(1, 2, 3, 5);