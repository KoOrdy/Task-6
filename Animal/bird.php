<?php
include_once 'Animal.php';

class Bird extends Animal {
    public function eat() {
        echo "The bird is eating seeds.";
    }

    public function makeSound() {
        echo "The bird says: Chirp! Chirp";
    }
}
