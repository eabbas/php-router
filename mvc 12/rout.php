<?php
class rout {
    private $urlArrey=["produt"=>['productController','all']];
    public $url=[];
    function __construct(){
    }
    public static function getrequest($url){
        $this->url=$url;
        self::setUrl();
    }
    public  static function setUrl(){  
        // $this->urlArrey=['model/porduct'=>'']
       if(arrey_key_exists($this->url,$this->urlArrey)){
        //    include " \"controller\". $this->urlArrey[$this->url]";




       }
    }
}