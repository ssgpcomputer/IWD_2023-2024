<?php

class Shape {
    public function area() {
        return "Area calculation is not defined for a generic shape.";
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
echo $rect->area(); // Calls the overridden method in Rectangle class

?>

