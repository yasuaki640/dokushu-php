<?php
declare(strict_types=1);

$area = Func1::getTriangleArea(8, 10);
print "a triangle area is {$area}";

class Func1
{
    static function getTriangleArea(int $base, int $height): int
    {
        return $base * $height / 2;
    }
}