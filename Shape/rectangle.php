<?php

class Rectangle extends Shape{

    private $length;
    private $width;
    
    public function __construct($length, $width) {
        if($length>0 && $width>0) {
            $this->length = $length;
            $this->width = $width;
        }
    }
    public function calculatearea(){
        return $this->length*$this->width;
    }
}