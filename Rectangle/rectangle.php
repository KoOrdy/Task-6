<?php

class Rectangle{

    private $length;
    private $width;
    
    public function __construct($length, $width) {
        if($length>0 && $width>0) {
            $this->length = $length;
            $this->width = $width;
        }
    }
    public function area(){
        return $this->length*$this->width;
    }

    public function perimeter(){
        return 2*($this->length + $this->width);
    }
}