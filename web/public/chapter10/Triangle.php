<?php
declare(strict_types=1);
require_once 'Figure.php';

class Triangle implements Figure
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
        return $this->width * $this->height / 2;
    }
}