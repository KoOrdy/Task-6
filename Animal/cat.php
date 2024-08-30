<?php
include_once 'Animal.php';

class Cat extends Animal {
    public function eat() {
        echo "The cat is eating cat food.";
    }

    public function makeSound() {
        echo "The cat says: Meow! Meow";
    }
}

