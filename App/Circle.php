<?php
namespace App;

use JetBrains\PhpStorm\Pure;

class Circle extends shape
{
    public int | float $radius;
    #[Pure] public function __construct(string $name, int|float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea(): float|int
    {
        return pi() * pow($this->radius,2);
    }
    public function calculatePerimeter(): float|int
    {
        return pi() * $this->radius *2;
    }
}
