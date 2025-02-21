<?php

class Rectangle {
    public $length;
    public $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this->length * $this->width;
    }

    public function __clone() {
    }
}

$rect1 = new Rectangle(10, 5);
echo "Original Rectangle Area: " . $rect1->area() . "<br>";

$rect2 = clone $rect1;
$rect2->length = 20;
$rect2->width = 10;

echo "Cloned Rectangle Area: " . $rect2->area() . "<br>";
echo "Original Rectangle Area After Cloning: " . $rect1->area() . "<br>";

?>

