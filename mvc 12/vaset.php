<?php
class vaset{
         public $rout;
         public $request; 
         public function __conestruct(){
            $this->catchRequest();
         }      
         public function catchRequest(){
         //    $this->request=container::bind(request::class, request::class);
               $this->request=request::setUr();
             }
         public  static function setRout(){
        //  $this->$rout=container::bind(rout::class, rout::class);
          rout::getrequest( $this->request);
    }
    
    }