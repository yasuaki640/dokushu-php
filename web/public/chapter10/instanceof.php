<?php
require_once 'Triangle.php';
require_once 'Square.php';
require_once 'Figure.php';

$figs =
    [
        new Triangle(10, 5),
        new Square(10, 5),
        new Triangle(3, 2)
    ];

foreach ($figs as $fig) {
    if ($fig instanceof Figure) {
        print '<p>' . get_class($fig) . ' : ' . $fig->getArea() . '</p>';
    }
}
