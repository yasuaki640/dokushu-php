<?php
declare(strict_types=1);

class Square extends Figure
{
    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}