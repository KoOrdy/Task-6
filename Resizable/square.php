<?php

class Square implements Resizable{
    private $Length;
    
    public function __construct($length) {
        if($length>0) {
            $this->Length = $length;
        }   
    }

    public function resize($newLength){
        if($newLength>0) {
            $this->Length = $newLength;
        }
    }

    public function getlength(){
        return $this->Length;
    }

}