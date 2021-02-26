<?php
declare(strict_types=1);

function sum(float  ...$args): float
{
    $result = 0;
    foreach ($args as $arg) {
        $result += $arg;
    }
    return $result;
}

print sum(7, 3, 10);
print sum(11, 123, -456);