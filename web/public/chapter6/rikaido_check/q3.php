<?php
declare(strict_types=1);

function processNum(callable $func, float ...$args): array
{
    $result = [];
    foreach ($args as $arg) {
        $result[] = $func($arg);
    }
    return $result;
}

list($x, $y) = processNum(
    function (float $num): float {
        return $num * $num;
    },
    5, 15
);