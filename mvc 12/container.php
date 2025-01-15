<?php
class container {
 public static  $contianer;
 public static  function bind($abstract,$concrete){
    $closure=self::getClosure($concrete);
    self::$contianer[$abstract]= $closure;
    return $closure;

 }  
 public static function getClosure($funcName){
    return function() use ($funcName){return new $funcName;};
 }
}







?>