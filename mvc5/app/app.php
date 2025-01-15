<?php

class app{
  public static function getConfigure(){
    // container :: bind(vaset :: class , vaset :: class);
    // $appInstance = container::$container['vaset']();
    $vasetInstance = container::resolve('vaset')();
    $vasetInstance -> get();
  }
}