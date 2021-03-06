<?php
namespace App;
use JetBrains\PhpStorm\Pure;

class  Cylinder extends Circle
{
    public int $height;
    #[Pure] public function __construct(string $name, float|int $radius, int $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calculateArea(): float|int
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height ; // TODO: Change the autogenerated stub
    }
    public function calculateVolume(): float|int
    {
        return parent::calculateArea() * $this->height;
    }

}