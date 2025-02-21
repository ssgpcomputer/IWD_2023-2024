<?php

abstract class Shape {
    abstract public function area();

    public function display() {
        return "This is a shape.";
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return "Area of Rectangle: " . ($this->length * $this->width);
    }
}

$rect = new Rectangle(5, 10);
echo $rect->display() . "<br>";  
echo $rect->area();          

?>

