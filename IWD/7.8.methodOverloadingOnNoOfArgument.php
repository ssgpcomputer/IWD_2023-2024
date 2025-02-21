<?php

class Shape {
    public function area() {
        return "No shape defined, cannot calculate area.";
    }
}

class Rectangle extends Shape {
    public function area($length = null, $width = null) {
        if ($length !== null && $width !== null) {
            return "Area of Rectangle: " . ($length * $width);
        } elseif ($length !== null) {
            return "Assuming a square, area: " . ($length * $length);
        } else {
            return parent::area();
        }
    }
}

$obj = new Rectangle();
echo $obj->area() . "<br>";         
echo $obj->area(5) . "<br>";          
echo $obj->area(5, 10) . "<br>";    
?>
