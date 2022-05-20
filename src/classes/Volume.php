<?php
class Volume{
    public function cubeVolume($a){
         return $a*$a*$a;
    }
    public function sphereVolume($r){
        return 4/3*3.14159*$r*$r*$r;
    }
}