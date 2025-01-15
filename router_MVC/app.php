<?php

// class app{
//     // public $request;
//     // public $router;
//     // public static $objects;
//     public $x;
//     // public function __construct(){
//     //     // $this -> getCreate();
//     //     // $this -> request = new request();
//     //     // $this -> router = new router();
//     //     // $this -> callRouterMethod();
//     //     // var_dump(self::$objects);
//     //     var_dump($this -> getCreateUser());
//     // }
//     public function makeRequest(){
//         return new request;
//     }
//     public function makeRouter(){
//         return new router;
//     }
//     // public function getCreateUser(){
//     //     return new create;
//     // }
//     public function getData(){
//         $request = $this -> makeRequest();
//         $this -> x = $request -> latestIndex();
//     }
//     public function callRouterMethod(){
//         $this ->getData();
//         $request = $this -> makeRequest();
//         $router = $this -> makeRouter();
//         $data = $request -> sendData();
//         // $router -> post($this -> x);
//         // $data = $this -> getCreateUser() -> sendData();
//         $this -> makeRouter() -> post($this -> x, $data);
//     }
// }
// app::$objects[] = new router;
// app::$objects[] = new request;
// app::getCreateUser($create);



class app{
    public $lastIndex;
    // function __construct(){
    //     echo "mmd";
    // }
    public function makeRequest(){
        // return new request;
        var_dump(container :: resolve(request::class));
        return container :: resolve(request::class);
    }
    public function makeRouter(){
        // return new router;
        return container :: resolve(router::class);
    }
    public function getData(){
        $request = $this -> makeRequest();
        $this -> lastIndex = $request -> latestIndex();
    }
    public function callRouterMethod(){
        $this ->getData();
        $request = $this -> makeRequest();
        $router = $this -> makeRouter();
        $data = $request -> sendData();

        $endRequest = $this -> lastIndex[0];
        $request = (int)  $endRequest;
        if($request > 0 ){
            $router ->post($this -> lastIndex[1], $endRequest);
        }
        if($request == 0 ){
            $router ->post($endRequest, $data);
        }
    }
}