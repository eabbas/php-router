<?php
class request{
    public  $url=[];
    //public $data;
    function __construct(){
      //  $this->setUrl(); 
    }
    public static function setUrl (){
      return  $this->url=explod('/',$_SERVER['REQUEST_URI']);
    }
    // public static function getUrl(){
    //    return $this->url[2];
    // }
    // public function getData(){
    //  return $this->
    // }
}
?>