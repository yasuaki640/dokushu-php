<?php
declare(strict_types=1);

class Figure
{
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return 0;
    }
}