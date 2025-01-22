<?php

class vaset implements controller{
  public $requestInstance;
  public $routerInstance;
  public $url;
  function __construct(){
    $this -> configure();
  }
  public function configure(){
  // container :: bind(request :: class , request :: class);
    // $this -> requestInstance = container::$container['request']();
    $this -> requestInstance = container::resolve('request')();
   
  }
  public function catchUri(request $object){
    return $object -> parsUrl();
  }
  public function get(){
    $this -> url = $this -> catchUri($this -> requestInstance);
    // var_dump($this -> url);
    router :: post($this -> url);
    // container :: bind(router :: class , router :: class);
    // $this -> routerInstance = container::$container['router']();
    // $this -> routerInstance -> post($this -> url);
  }
}