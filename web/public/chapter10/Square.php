<?php
declare(strict_types=1);

class Square
{
    public static function square(float $width, float $height): float
    {
        return $width * $height;
    }
}