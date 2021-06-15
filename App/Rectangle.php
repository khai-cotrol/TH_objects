<?php
namespace App;


use JetBrains\PhpStorm\Pure;

class Rectangle extends shape
{
    public int $width;
    public  int $height;
    #[Pure] public function __construct(string $name,
                                        int $height,
                                        int $width)
    {
        parent::__construct($name);
        $this->width =$width;
        $this->height = $height;
    }
    public  function  calculateArea(): float|int
    {
        return $this->height * $this->width;
    }
    public  function  calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2 ;
    }

}