<?php
// $rout=container::bind(rout::class,rout::class);

// $request=container::bind(request::class,request::class);
class appConn {
    // public $routUrl;
    // public $request;
    public $vaset;
    function __construct(){
        // $this->setRequest();
        $this->vaset=new vaset;
        vaset::$setRout();

    }
    // public function makeObject(){

    // } 
    // public function setRequest(){
    //     $request=request::getUrl();

    //     $this->request($request);

    // }
    // public function request($request){
    //    $this->request=$request;
    // }
    
    // public function rout(){
    //     rout::connection($this->routUrl);
    // }
}
// $appConn=new appConn;
// $request=new request();


 //$appConn->rout();
 //$request=new request;
/// $request->getData();

?>