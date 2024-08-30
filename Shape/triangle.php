<?php

class Triangle extends Shape{

    private $height;
    private $base;

    public function __construct($height, $base){
        if($height>0 && $base>0){
             $this->height = $height;
             $this->base = $base;
        }   
    }
    public function calculatearea(){
        return 0.5 * $this->base * $this->height;
    }
}

