<?php
include_once 'Animal.php';

class Dog extends Animal {
    public function eat() {
        echo "The dog is eating dog food.";
    }

    public function makeSound() {
        echo "The dog says: Hoow Hoow";
    }
}
