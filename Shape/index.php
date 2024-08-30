<?php

include_once "shape.php";
include_once "rectangle.php";
include_once "triangle.php";

$rectangle = [
    new Rectangle(10, 5),
    new Rectangle(20, 8),
    new Rectangle(5, 2),
];

$triangle = [
    new Triangle(3, 4),
    new Triangle(6, 8),
    new Triangle(5, 12),
];


foreach ($rectangle as $r) {
    echo "Rectangle Area: " . $r->calculatearea();
    echo "<br>";
}

echo "<hher>";

foreach ($triangle as $t) {
    echo "Triangle Area: " . $t->calculatearea();
    echo "<br>";
}