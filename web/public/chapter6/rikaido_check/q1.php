<?php
declare(strict_types=1);

function getSquareArea(int $base = 1, int $height = 1): int
{
    return $base * $height;
}

print getSquareArea(5, 6);