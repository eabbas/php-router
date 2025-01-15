<?php

// class request{
//     public $uri;
//     public $uriArr;
//     public function __construct(){
//         $this -> uri = $_SERVER['REQUEST_URI'];
//         $this -> parsUri();
//     }
//     public function getUserCreate(){
//         return new create;
//     }
//     public function parsUri(){
//         $this -> uriArr = explode("/", $this -> uri);
//     }
//     public function getUriArr(){
//         return $this -> uriArr;
//     }
//     public function latestIndex(){
//         $x = $this -> getUriArr();
//         // نجوی روت لاری کنترل الیخ؟
//         return $x[count($x) - 1];

//     }
//     // public function sendData(){
//     //     return $_POST;
//     // }
//     public function sendData(){
//         return $this -> getUserCreate() -> sendData();
//     }
// }


// بدین منش باید نگاشت
// Route::index($route,[$controller, $method]);




class request{
    public $uri;
    public $uriArr;
    public function __construct(){
        $this -> uri = $_SERVER['REQUEST_URI'];
        $this -> parsUri();
    }
    public function getUserCreate(){
        // return new create;
        return container :: resolve(create::class);
    }
    public function getUserUpdate(){
        // return new updateUser;
        return container :: resolve(updateUser::class);
    }
    public function parsUri(){
        $this -> uriArr = explode("/", $this -> uri);
    }
    public function getUriArr(){
        return $this -> uriArr;
    }
    public function latestIndex(){
        $x = $this -> getUriArr();
        $route = [$x[count($x) - 1], $x[count($x) - 2]];
        
        return $route;

    }
    // public function sendData(){
    //     return $_POST;
    // }
    public function sendData(){
        return $this -> getUserCreate() -> sendData();
    }
    public function sendValue(){
        return $this -> getUserUpdate() -> sendData();
    }

    // public function sendRouter(){

    // }
}
