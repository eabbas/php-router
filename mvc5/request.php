<?php

class request{

  public $url;
  public $urlArray;
  // public $data;
  function __construct(){
    $this -> get();
  }
  // public function getUserCreate(){
  //   return new create;
  // }
  public function get(){
    $this -> url = $_SERVER['REQUEST_URI'];
    // $this -> getData();
  }
  public function parsUrl(){
    return $this -> urlArray = explode('/' , $this -> url);
  }

  // $_POST رو برمیگردونه از کلاس یوزر کرییت
  public function getData(){
    // var_dump("wpdw");
    // return $this -> getUserCreate() -> getData();
    return $_POST;
  }
/*

  public function lastIndex(){
    $x = $this -> parsUrl();
    return $x[count($x) - 1];

  }

*/

  // function __construct(){
  //   $this -> configure();
  // }
  // public function configure(controller $vaset){
  //   $this -> vaset = $vaset;
  //   $this -> vaset -> getObject();
  // }
}