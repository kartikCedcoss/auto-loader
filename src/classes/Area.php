<?php
class Area{
    public function squareArea($a){
         return $a*$a;
    }
    public function triangleArea($h,$b){
         return $h*$b/2; 
    }
    public function circleArea($r){
        return 3.14159*$r*$r;
    }
}

