<?php

class router{
  public static $url;
  public static function getUserController(){
    return new userController;
  }
  public static function post($url){
    self :: $url = $url;
    // var_dump(self :: $url);
    // if(self:: $url[2] == ""){
    //   include "menue.php";    
    // }
    // }محصول دست نگین
    $routes = [
      "user" => [self :: getUserController() , "all"] , 
      // "create" => [self :: getUserController(), "creat"]
      // "product" => [new productController , "all"] ,
      // "category" => [new categoryController , "all"]  
    ];
    // if ($url[count($url) - 1] == "userForm") {
    //   self :: getUserController() -> index($url[count($url) - 1]);
    // }
    if ($url[2] == "userForm") {
      self :: getUserController() -> index($url[2]);
    }
    if ($url[2] == "create") {
      self :: getUserController() -> index1($url[2]);
    }
    // if ($url[count($url) - 1] == "create") {
    //   self :: getUserController() -> creat($url[count($url) - 1]);
    // }
  
  // if (array_key_exists(self ::$url[2],$routes)){
  //   $x = $routes[self :: $url[2]][0];
  //   $y = $routes[self :: $url[2]][1];
  //   $x -> $y();
  //   }

  foreach($routes as $key => $value){
    if(self::$url[2] == $key){
      $x = $routes[$key][0];
      $y = $routes[$key][1];
      $x -> $y();
    }
  }
  }
}

