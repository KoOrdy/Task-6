<?php
include_once 'Dog.php';
include_once 'Cat.php';
include_once 'Bird.php';

$dog = new Dog();
$dog->eat();
$dog->makeSound();

echo"<hr>";

$cat = new Cat();
$cat->eat();
$cat->makeSound();

echo"<hr>";

$bird = new Bird();
$bird->eat();
$bird->makeSound();

