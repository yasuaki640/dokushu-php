<?php
declare(strict_types=1);

print getDiamondArea(1,5);

function getDiamondArea(int $diagonal1, int $diagonal2): float
{
    return $diagonal1 * $diagonal2 / 2;
}