<?php


// class container{
//     public static $container;
//     public static function bind($abstract, $concrete){
//         $closure = self :: getClosure($concrete);
//         self :: $container[$abstract] = $closure;
//     }
//     public static function getClosure($className){
//         return function () use ($className) { return new $className;};
//     }
//     public static function resolve(string $instanceName){
//         if(isset(self :: $container[$instanceName])){
//             return self :: $container[$instanceName];
//         } else {
//             self :: bind($instanceName, $instanceName);
//             return self :: $container[$instanceName];
//         }
//     }
// }



class container{
    public static $container;
    public static $instance;
    public static function bind($abstract, $concrete){
        $closure = self :: getClosure($concrete);
        self :: $container[$abstract] = $closure;
    }
    public static function getClosure($className){
        return function () use ($className) { return new $className;};
    }
    public static function resolve(string $instanceName){
        // if(!self::$instance){
            if(isset(self :: $container[$instanceName])){
                self::$instance = self::$container[$instanceName];
                // return self :: $container[$instanceName];
                return singleton::makeObject(self :: $container[$instanceName]);
            } else {
                self :: bind($instanceName, $instanceName);
                self::$instance = self::$container[$instanceName];
                // return self :: $container[$instanceName];
                return singleton::makeObject(self :: $container[$instanceName]);
            }
            return self::$instance;
        // }
    }
}