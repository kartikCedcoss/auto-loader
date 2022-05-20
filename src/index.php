<?php
spl_autoload_register(function($className){
    $path = 'classes/';
           require_once($path.$className.'.php');
});
$obj = new Area();
echo $obj->squareArea(145);