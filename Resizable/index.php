<?php

include_once"resizable.php";
include_once"square.php";

$square = new Square(10);
echo "the length before resize";
echo"<br/>";
echo "The Lenght:".$square->getlength();

echo"<br/>";

echo"the length after resize";
echo"<br/>";
$square->resize(50);
echo "The Lenght:".$square->getlength();
