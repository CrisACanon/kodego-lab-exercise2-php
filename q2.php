<?php
class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getCircumference() {
        return 2 * pi() * $this->radius;
    }
}

$circle = new Circle(4);
echo "Area: " . $circle->getArea() . "</br>";
echo "Circumference: " . $circle->getCircumference() . "</br>";





/*

Q2.Write a PHP class called 'Circle' that has a radius property. Implement methods to calculate the circle's area and circumference.

The pow() function returns x raised to the power of y.

The pow() function returns x raised to the power of y.
The constructor method __construct() initializes the circle radius.
The getArea() method calculates and returns the area of the circle using the formula: π * r^2, where π is a constant value obtained from the pi() function, and r is the radius of the circle.
The getCircumference() method calculates and returns the circle circumference using the formula: 2*π*r.
*/