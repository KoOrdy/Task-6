<?php

include_once "rectangle.php";

$rectangle = [
    new Rectangle(10, 5),
    new Rectangle(20, 8),
    new Rectangle(5, 2),
];

foreach ($rectangle as $r){
    echo "Area: ". $r->area();
    echo"<br>";
    echo "Perimeter: ". $r->Perimeter();
    echo "<hr>";
}