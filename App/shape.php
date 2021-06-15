<?php
namespace App;

class shape
{
     public string $name;
     public function __construct( string $name)
     {
         $this->name = $name;
     }

     public function show()
     {
         return "i am a shape . my name is $this->name";
     }

}
