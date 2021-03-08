<?php
require_once 'Triangle.php';
require_once 'Square.php';

$tri = new Triangle(5, 10);
$squ = new Square(5, 10);

print "Triangle area : {$tri->getArea()} <br/>";
print "Square area : {$squ->getArea()} <br/>";
