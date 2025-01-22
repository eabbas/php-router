<?php


class container{
  public static $container = [];
  private function __construct(){ }
  public static function bind($key , $value){
    $closure = self :: getclosure($value);
    return self::$container[$key] = $closure;
    // var_dump( self::$container);
  }
  public static function getclosure($functionName){
    return function() use($functionName){return new $functionName;};
  }

  public static function resolve(string $instanceName){
    if(isset(self::$container[$instanceName])){
      // echo "kkof";
      return self::$container[$instanceName]();
      // return self::$container[$instanceName]();
    }else{
      return container :: bind($instanceName , $instanceName);
      //  $instance =container :: bind($instanceName , $instanceName);
        // return $instance;
    }
  }
}







// class container{
//   public static $container;
//   public static $instance;
//   private function __construct(){ }
//   public static function bind($key , $value){
//     $closure = self :: getclosure($value);
//     self::$container[$key] = $closure;
//     // var_dump( self::$container);
//   }
//   // public static function getInstance(){
    
//   // }
//   public static function getclosure($functionName){
//     return function() use($functionName){return new $functionName;};
//   }

//   public static function resolve(string $instanceName){
//     if(isset(self::$container[$instanceName])){
//       return self::$container[$instanceName]();
//     }else{
//          $instance =container :: bind($instanceName , $instanceName);
//         return $instance;
//     }
//   }
// }

// container :: bind(app :: class , app :: class);
// $appInstance = container::$container['app']();